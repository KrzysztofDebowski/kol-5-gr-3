Feature: Obliczenia

  Scenario: Pole trapezu
    Given I am on homepage
    When I follow "Kalkulator by mrskowron"
    And I fill in "a" with "10"
    And I fill in "b" with "10"
    And I fill in "h" with "1"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 10"