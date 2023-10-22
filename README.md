# Event Registration Portal

## Overview

The Event Registration Portal is a website designed for the VIT Film Society to manage registrations and participation in their film events. The website caters to two main user groups: <br>
1) film enthusiasts who want to attend events. <br>
2) filmmakers who want to participate.

## Functionality

The Event Registration Portal offers the following key features:

1. **User Registration**: Film enthusiasts can register for events through the website.

2. **Ticket Generation**: Upon registration, users receive their event tickets via email.

3. **Participant Registration**: Filmmakers can register their teams for participation in the film event.

4. **Confirmation Emails**: Filmmakers receive a unique ID via email upon successful team registration.

5. **Event Schedules**: Users can access information about scheduled events, including speakers, time, and venue.

6. **Countdown Timer**: The website displays the time remaining for each event using JavaScript's time functions.

7. **Inquiry System**: Users can submit inquiries through the website, providing their name, subject, and email. The organizer team can respond to inquiries through the inquiry system.

## Navigation

The navigation menu on the homepage includes the following options:

- **Events**: View a list of scheduled events.
- **Schedules**: Access information about event schedules.
- **Register**: Register for an event.
- **Tickets**: Retrieve event tickets.
- **Contact Us**: Use the inquiry system to contact the organizers.
- **FAQ**: Access frequently asked questions.

## Tech Stack

The Event Registration Portal is built using the following technologies:

- **HTML**: The structure of the web pages.
- **CSS**: Styling for a visually appealing user interface.
- **JavaScript**: For dynamic functionality, including the countdown timer.
- **PHP**: To handle user registration, ticket generation, and inquiry submissions.
- **MySQL**: To store and manage user data and inquiries.

## Getting Started

To deploy the Event Registration Portal, follow these steps:

1. Clone the repository to your web server.

2. Set up a MySQL database and import the provided SQL script to create the necessary tables.

3. Configure the database connection in the PHP files that interact with the database.

4. Make sure your web server supports PHP.

5. Customize the website content and styling to match your event's branding.

6. Ensure that the PHP `mail()` function is properly configured to send confirmation emails.

7. Test the website thoroughly to ensure all functionality is working as expected.

8. Launch the website and start accepting registrations and inquiries.
