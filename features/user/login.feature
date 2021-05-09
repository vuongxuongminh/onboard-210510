Feature: As a end-user i want to login to the system.
  @user
  Scenario: Login success
    When I am on "login.html"
    And I wait for the form to be loaded
    And I should see "Login"
    And I fill in "email" with "1@onboard.demo"
    And I fill in "password" with "Qwerty@123"
    And I press "Log In"
    Then I should see "Login success!"

  @user
  Scenario: Email not exist
    When I am on "login.html"
    And I wait for the form to be loaded
    And I should see "Login"
    And I fill in "email" with "11@onboard.demo"
    And I fill in "password" with "Qwerty@1233"
    And I press "Log In"
    Then I should see "Email not exist!"

  @user
  Scenario: Incorrect password
    When I am on "login.html"
    And I wait for the form to be loaded
    And I should see "Login"
    And I fill in "email" with "1@onboard.demo"
    And I fill in "password" with "Qwerty@1233"
    And I press "Log In"
    Then I should see "Password is not correct!"