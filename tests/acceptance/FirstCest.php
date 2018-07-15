<?php


class FirstCest
{
    private function nextPageAvailable($page){
	/*TDO function that will check if there is next pagination page available to check*/    	
	if($page==1)
	{
		return TRUE;	
	}
	return FALSE;
    }

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function basicSearchResults(AcceptanceTester $I)
    {	
	//test checks if search result returns deals from proper city
	//TDO add more cities
	$cities = array("Poznań", "Wrocław", "Warszawa", "Lublin");
	$I->amOnPage('/');
        foreach ($cities as $val){
		$I->fillField(['id' => 'horus-querytext'],$val);
        	$I->click(['class' => 'horus-btn-search']);
        	$I->see($val);
		//TDO add more conditiosn to be checked
	}
    }
    public function changeCurrency(AcceptanceTester $I)
    {
	$currencies = array("PLN","AED","USD");
	//TDO
	//Test change currency to every possible at trivago
	// after change it will  check if proper currency is displayed
	
    }

    public function changeCountry(AcceptanceTester $I)
    {
        //TDO
        //Test change countr to every possible at trivago
        // after change it will  check if proper language  is displayed and if trivago is displayed with domain of current country
        
    }

    public function checkSortingOrder(AcceptanceTester $I)
    {
        //TDO
        //change sorting order of displayed deals
	//check if deals are displayed with chosen order
        
    }

    public function paginationTest(AcceptanceTester $I)
    {
    /*
 	check if every pagination page work and is accessible
    */
	$I->amOnPage('/');
	$I->fillField(['id' => 'horus-querytext'],"Berlin");
	$I->click(['class' => 'horus-btn-search']);
	$page_number=1;
	/* TDO make while loop working
	while (nextPageAvailable($page_number)){
		//add helper with function nextPageAvailable
		$previous_page_deals=$I->grabTextFrom('js_item_list_section');
		//TDO click on next available page
		$current_page_deals=$I->grabTextFrom('js_item_list_section');
		$page_number++;
		//TDO compare if current page is different than previous page
	}*/
    }

}
