# ZooParc – Zoo Management Website

An interactive zoo website for exploring animals, learning about them, and viewing special event schedules. Visitors can browse animals, events, programs, food and the gallery, and register for an account. Administrators get a dashboard for managing events and programs.

Built with PHP, MySQL, HTML, CSS and JavaScript (jQuery).

![ZooParc home page](screenshots/index.png)

## Screenshots

| About Us | Animals |
|---|---|
| ![About Us](screenshots/aboutus.png) | ![Animals](screenshots/animal.png) |
| **Gallery** | **Upcoming Events** |
| ![Gallery](screenshots/gallery.png) | ![Upcoming Events](screenshots/eventnav.png) |
| **Food Menu** | **Conservation** |
| ![Food Menu](screenshots/food.png) | ![Conservation](screenshots/conservation.png) |
| **Contact Us** | **Registration** |
| ![Contact Us](screenshots/contactus.png) | ![Registration](screenshots/register.png) |
| **Admin Login** | **Admin – Manage Events** |
| ![Admin Login](screenshots/admin-main.png) | ![Admin – Manage Events](screenshots/admin-event.png) |

## Features

### Visitor site
- **Home, About Us, Conservation**: information about the zoo and its conservation work
- **Animals**: mammals, birds and a "most viewed" section
- **Events & Programs**: upcoming events and programs, loaded from the database
- **Gallery** and **Food** pages
- **Contact Us**: contact form, sent through [Web3Forms](https://web3forms.com)
- **User accounts**: registration (with email, password-length and confirm-password checks), login and logout
- Responsive navigation bar with a mobile menu

### Admin panel
- Admin login (`admin-main.php`)
- Dashboard with a collapsible sidebar
- **Events**: add, edit and delete events, including image upload
- **Programs**: add, edit and delete programs, including image upload
- **Educational content**: add and delete entries (`education.php`)

## Technologies

- PHP (mysqli)
- MySQL
- HTML5 and CSS3
- JavaScript and jQuery
- Font Awesome icons
