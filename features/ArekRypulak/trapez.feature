Feature: Obliczenia

  Scenario: Kalkulator Trapezu
    Given I am on homepage
    When I follow "Kalkulator Trapezu by arypulak"
    And I fill in "a" with "4"
    And I fill in "b" with "5"
    And I fill in "h" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 9"