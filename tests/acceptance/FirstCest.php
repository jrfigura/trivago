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
   	/*
    Test change currency to every possible at trivago
    after change it will  check if proper currency is displayed
	*/
	$currencies = array(	"PLN" => "zł"/*,
				"GBP" => "£",
				"USD" => "$",
				"EUR" => "€"*/);
	//TDO add all supported currencies
	$I->amOnPage('/');
	$I->click(['class' => 'horus-btn-search']); //it doesn't matter what city we search for this test - random city is fine
	foreach ($currencies as $currency => $symbol){
		//TDO selecting of new currency
		//$I->selectOption('form select[id="currency"]', $currency);
		$I->see($symbol);
	}

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
