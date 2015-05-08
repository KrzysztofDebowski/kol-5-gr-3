Feature: Pole trapezu

 Scenario: Obliczenie pola trapezu
   Given I am on homepage
   When I follow "Pole trapezu by kamilstrzelecki"
    And I fill in "a" with "2"
    And I fill in "b" with "3"
    And I fill in "c" with "2"
    And I press "Oblicz"
    Then I should see "Pole wynosi 5" 
