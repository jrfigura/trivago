<?php


class FirstCest
{
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
        //TDO
 	//check if every pagination page work and is accessible
        
    }

}
