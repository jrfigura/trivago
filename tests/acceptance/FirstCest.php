
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
	$cities = array("Poznań", "Wrocław", "Warszawa", "Lublin", "Szczecin", "Berlin");
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
        //TDO add more countries
	$countries = array(	"Polska" => array(
					"greeting"=>"Znajdź swój idealny hotel i porównuj ceny z wielu stron",
					"newsletter"=>"Chcesz otrzymywać ekslukzywne oferty hoteli? ",//Zapisz się do naszego newslettera!",
					"view_deal"=>"Zobacz ofertę",
					"url"=>"trivago.pl"
					) /* commented out untill select start working,//Polska
				"Italia" => array(
					"greeting"=>"Trova il tuo hotel ideale e confronta i prezzi di tantissimi siti web",
					"newsletter"=>"Vuoi ricevere offerte esclusive sugli hotel? Iscriviti alla nostra newsletter!",
					"view_deal"=>"Vedi l'offerta",
					"url"=>"trivago.it"
					),//Italia
				"USA" => array(
					"greeting"=>"Find your ideal hotel and compare prices from different websites",
					"newsletter"=>"Want to receive exclusive hotel offers? Subscribe to our newsletter!",
					"view_deal"=>"View Deal",
					"url"=>"trivago.com"
					)//USA */
			);//$countries
	$I->amOnUrl('https://trivago.pl');
	foreach ($countries as $country => $conditions){
		//TDO figure out how select country
		//$I->selectOption('form select[id="select-country"]', $country);
		$I->see($conditions["greeting"]);
		//$I->see($conditions["newsletter"]);
		$I->click(['class' => 'horus-btn-search']);
		$I->see($conditions["view_deal"]);
		//$I->seeInCurrentUrl($conditions["url"]);
		//for some reason current url is still '/'  - it should be updated at least after search button was clicked
	}
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

