Feature: Obliczenia

  Scenario: Kalkulator pola trapezu by Paziewski B.
    Given I am on homepage
    When I follow "Kalkulator by bartuuus"
    And I fill in "a" with "3"
    And I fill in "b" with "2"
    And I fill in "h" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 5"