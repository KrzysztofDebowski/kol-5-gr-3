Feature: Obliczenia

  Scenario: Pole trapezu
    Given I am on homepage
    When I follow "Pole trapezu by pawlo1501"
    And I fill in "a" with "2"
    And I fill in "b" with "2"
    And I fill in "h" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 4" 
