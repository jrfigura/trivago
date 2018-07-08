b. Explain in detail why you choose these tests.
* basicSearchResults - most basic and important feature of trivago. it require constand and frequent check if it is working correctly. Any issue with wrong search results would be crutial and require quick fixing
* changeCurrency - many test steps to perform and can be scripted well. all actions may be performed by script. Manual tester could not find every bug
* changeCountry - many test steps to perform and can be scripted well. all actions may be performed by script. Manual tester could not find every bug
* checkSortingOrder - many test steps to perform and can be scripted well. all actions may be performed by script. Manual tester could not find every bug
* paginationTest - many test steps to perform and can be scripted well. all actions may be performed by script. Manual tester could not find every bug

c. What are the limitations of this test.
All tests are limited by scripted behavior - they won't find any undetermined behaviors. 
Also with new currencies/countries it will require adding them to script.


h. Add a small step by step tutorial to execute your automated test.
1. Prepare codeception environment to run with PhpBrowser
2. Copy tests to test directory 
3. Execute tests with command codecept run  