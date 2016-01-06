Feature:
  Test
  
  Scenario: I can see the test page field.
    Given I am logged in as an admin user
    When I visit "http://localhost/proyectos/sweatworks/WordpressTest/?test=testvictor"
    Then I should see the text "prueba input"