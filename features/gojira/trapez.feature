Feature: Obliczenia

  Scenario: Trapez
    Given I am on homepage
    When I follow "Trapez by gojira"
    And I fill in "a" with "5"
    And I fill in "b" with "10"
    And I fill in "h" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 15"