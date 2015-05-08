Feature: Obliczenia

  Scenario: Pole trapezu
    Given I am on homepage
    When I follow "Pole trapezu by dpyc"
    And I fill in "a" with "2"
    And I fill in "b" with "3"
    And I fill in "h" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 10"