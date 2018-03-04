Feature: Quotation
    As a User, I want to pay the right price for my pizzas

  Scenario Outline: Order pizzas
    Given I go to "http://localhost/ATDD/order.php"
    When I order "<quantity>" x "<pizza>" for the "<ward>" ward with discount code "<discount>"
	Then I should pay "<price>"
    Examples:
      | pizza       	| quantity  | discount  | ward  		| price |
      | Capricciosa     | 1         |           | Shinagawa     | 1000  |
      | Quattro formaggi| 2         |           | Kita          | 2800  |
      | Calzone     	| 2         |           | Shibuya       | 2160  |
      | Calzone     	| 2         |           | Shinjuku      | 2160  |
      | Calzone     	| 2         |           | Chiyoda       | 2160  |
      | Calzone     	| 2         |           | Chuo          | 2160  |
      | Calzone     	| 2         |           | Minato        | 2160  |
      | Margherita		| 10        | PARTY     | Itabashi      | 8000  |
      | Margherita		| 9         | PARTY     | Itabashi      | 9000  |
      | Margherita		| 10        | PARTY     | Shinjuku      | 7200  |