<?php

namespace Combodo\iTop\Test\UnitTest;
use \Service;
use \ServiceSubcategory;
use \Organization;
use \Person;
use \UserRequest;
use \Team;
use \lnkPersonToTeam;
use \Ticket;
use \MetaModel;


/**
 *
 */
class ApprovalExtendedTest extends ItopDataTestCase
{
    private Ticket $oTicket;
    private string $iHelpdesk;
    private int $iManager;
    private int $iAgent;
    private int $iCaller;
    private int $iCustomer;
    private int $iProvider;
    private int $iService;
    private int $iSubCategory;

	static public function setUpBeforeClass(): void
	{
		parent::setUpBeforeClass();
	}

	public function setUp(): void
	{
		parent::setUp();
        $this->DeleteAllObjects(\ApprovalRule::class);

		$this->iProvider = $this->GivenObjectInDB(\Organization::class, ['name' => 'Provider']);
		$this->iCustomer = $this->GivenObjectInDB(\Organization::class, ['name' => 'Client']);
        $iCoverage = $this->GivenFullCoverage();
        $iRule = $this->GivenApprovalRule('Approved by Manager',"SELECT Person AS M JOIN Person AS P ON P.manager_id = M.id WHERE P.id=:this->caller_id", $iCoverage);
		$this->iService = $this->GivenObjectInDB(\Service::class, ['name'=>'Computers and peripherals', 'org_id'=>$this->iProvider]);
		$this->iSubCategory = $this->GivenObjectInDB(\ServiceSubcategory::class, [
            'name' => 'New desktop ordering',
            'service_id' => $this->iService,
            'request_type' => 'service_request',
            'approvalrule_id' => $iRule,
        ]);
        $this->GivenCustomerContract('Contrat Client', $this->iCustomer, $this->iProvider, [$this->iService]);
        $this->iManager = $this->GivenObjectInDB(\Person::class, ['first_name' => 'Agatha', 'name' => 'Christie', 'org_id' => $this->iProvider]);
        $this->iCaller = $this->GivenObjectInDB(\Person::class, ['first_name' => 'Claude', 'name' => 'Monet', 'org_id' => $this->iCustomer, 'manager_id' => $this->iManager]);
		$this->iAgent = $this->GivenObjectInDB(\Person::class, ['first_name' => 'David', 'name' => 'Lynch', 'org_id' => $this->iProvider]);
        $this->iHelpdesk = $this->GivenObjectInDB(\Team::class, ['name' => 'Helpdesk', 'org_id' => $this->iProvider, 'persons_list' => ["person_id:$this->iAgent"]]);
	}


    public function testURInScopeOfSimpleApprovalRule()
    {
        $this->oTicket = $this->CreateSimpleUserRequest();
        $this->assertEquals('waiting_for_approval', $this->oTicket->Get('status'),"The ticket should be pending approval");
    }

    // HELPERS //

    private function CreateSimpleUserRequest() : \Ticket
    {
        return $this->createObject('UserRequest',
            ['title' => 'Test ticket',
                'org_id' => $this->iCustomer, // Demo client
                'caller_id' => $this->iCaller, // Claude Monet
                'service_id' => $this->iService, // Computers and peripherals
                'servicesubcategory_id' => $this->iSubCategory, //New desktop ordering
                'request_type' => 'service_request',
                'impact' => 2,
                'urgency' => 2,
                'team_id' => 0,
                'description' => 'Test ticket description']);
    }


    private function GivenCustomerContract(string $sName, int $iOrg, int $iProvider, array $aServices)
    {
        $iContract = $this->GivenObjectInDB(\CustomerContract::class, ['name' => $sName, 'org_id' => $iOrg, 'provider_id' => $iProvider]);
        foreach ($aServices as $aService)
        {
            $this->GivenObjectInDB(\lnkCustomerContractToService::class, ['customercontract_id' => $iContract, 'service_id' => $aService, 'sla_id' => 0]);
        }
        return $iContract;
    }


    public function DeleteAllObjects($sClassName)
    {
        $oSet = new \DBObjectSet(new \DBObjectSearch($sClassName));
        while ($oRule = $oSet->Fetch()) {
            $oRule->DBDelete();
        }
    }

    private function GivenFullCoverage(): int
    {
        $iCoverage = $this->GivenObjectInDB(\CoverageWindow::class, ['name' => '24*7', 'description' => 'all the time']);
        $aIntervals = [ //weekday, start_time, end_time
            ['weekday' => 'monday', 'start_time' => '00:00:00', 'end_time' => '23:59:59'],
            ['weekday' => 'tuesday', 'start_time' => '00:00:00', 'end_time' => '23:59:59'],
            ['weekday' => 'wednesday', 'start_time' => '00:00:00', 'end_time' => '23:59:59'],
            ['weekday' => 'thursday', 'start_time' => '00:00:00', 'end_time' => '23:59:59'],
            ['weekday' => 'friday', 'start_time' => '00:00:00', 'end_time' => '23:59:59'],
            ['weekday' => 'saturday', 'start_time' => '00:00:00', 'end_time' => '23:59:59'],
            ['weekday' => 'sunday', 'start_time' => '00:00:00', 'end_time' => '23:59:59'],
        ];
        foreach ($aIntervals as $aInterval)
        {
            $this->GivenObjectInDB(\CoverageWindowInterval::class, [
                'coverage_window_id' => $iCoverage,
                'weekday' => $aInterval['weekday'],
                'start_time' => $aInterval['start_time'],
                'end_time' => $aInterval['end_time'],
            ]);
        }
        return $iCoverage;
    }

    private function GivenApprovalRule(string $sName, string $sOqlL1, int $iCoverage): int
    {
        $oRule = $this->createObject(\ApprovalRule::class, [
            'name' => $sName,
            'level1_rule' => $sOqlL1,
            'level1_default_approval' => 'yes',
            'level1_timeout'=>70,
            'level1_exit_condition' => 'first_reply',
            'level1_substitute_query' => '',
            'level2_rule' => '',
            'level2_default_approval' => 'yes',
            'level2_timeout'=>70,
            'level2_exit_condition' => 'first_reply',
            'level2_substitute_query' => '',
            'coveragewindow_id' => $iCoverage,
        ]);
        return $oRule->GetKey();
    }
}
