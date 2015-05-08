Feature: Obliczenia

  Scenario: Trapez  (a+b)*h/2
    Given I am on homepage
    When I follow "Trapez by shuwax"
    And I fill in "A" with "3"
    And I fill in "B" with "3"
    And I fill in "H" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 9"
