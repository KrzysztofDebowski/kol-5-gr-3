Feature: Obliczenia

  Scenario: Kalkulator Trapez
    Given I am on homepage
    When I follow "Kalkulator Trapez by KamilSkowronek"
    And I fill in "a" with "3"
    And I fill in "b" with "7"
    And I fill in "h" with "5"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 25"