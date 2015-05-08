Feature: Obliczenia

  Scenario: Kalkulator Trapez
    Given I am on homepage
    When I follow "Kalkulator Trapez by szwej0"
    And I fill in "a" with "5"
    And I fill in "b" with "4"
    And I fill in "h" with "6"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 27"