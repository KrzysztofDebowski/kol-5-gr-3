Feature: Obliczenia

  Scenario: Trapez by krzysztof90
    Given I am on homepage
    When I follow "Trapez by krzysztof90"
    And I fill in "A" with "7"
    And I fill in "B" with "10"
    And I fill in "H" with "6"
    And I press "Oblicz"
    Then I should see "Wynik to 51"
