Feature: As a end-user i want to login to the system.
  @user
  Scenario: Login to the system
    When I am on "login.html"
    And I wait for the form to be loaded
    And I should see "Login"
    And I fill in "email" with "1@onboard.demo"
    And I fill in "password" with "Qwerty@123"
    And I press "Log In"
    Then I should see "Login success!"