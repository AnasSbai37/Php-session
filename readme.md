Web application for User Authentication:
    The project starts with a login page (login.php) where users can enter a username and password.
    The hardcoded correct username is "anas," and the correct password is "rayger1."
    If the entered credentials match the hardcoded values, the user is redirected to a session page (session.php) where they are considered authenticated.
    The authentication status is stored in a session variable called "autoriser."
Session Handling:
    Sessions are used to keep track of the user's authentication status across different pages.
    If a user is not authenticated (not logged in), attempts to access the welcome page (session.php) directly will result in redirection to the login page.
Welcome Page:
    The welcome page (session.php) displays a welcome message and provides a link to log out.
    The welcome page includes a check to ensure that only authenticated users can access it. If not authenticated, the user is redirected to the login page.
Logout Functionality:
    The logout page (logout.php) destroys the user's session, effectively logging them out, and then redirects them to the login page.
Styling:
    The styling for the login page (login.php) is defined in the "style.css" file.
    The styling for the welcome page (session.php) is defined in the "style1.css" file.
    
In summary, the project is a simple web application with user authentication. Users can log in, access a welcome page upon successful authentication, and log out. The styling is applied to enhance the visual presentation of the login and welcome pages.