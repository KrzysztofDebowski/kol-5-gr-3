Feature: Obliczenia

  Scenario: Kalkulator 1/2*(a+b)*h
    Given I am on homepage
    When I follow "Kalkulator by ersztek"
    And I fill in "a" with "5"
    And I fill in "b" with "7"
    And I fill in "h" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 12"