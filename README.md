# PHP Contact Form

A simple contact form that sends emails using PHP.

## Setup Instructions

1. Make sure you have PHP installed on your system
2. Set up a local web server (like XAMPP, MAMP, or PHP's built-in server)
3. Configure your email settings:

### Using PHP's Built-in Server
1. Open terminal/command prompt
2. Navigate to the project directory
3. Run: `php -S localhost:8000`
4. Open your browser and go to: `http://localhost:8000`

### Using XAMPP/MAMP
1. Place the project files in your web server's root directory:
   - XAMPP: `htdocs` folder
   - MAMP: `htdocs` folder
2. Start your web server
3. Open your browser and go to: `http://localhost/your-project-folder`

## Email Configuration

1. Open `send_email.php`
2. Replace `your-email@example.com` with your actual email address
3. Make sure your PHP installation is configured to send emails:
   - For local development, you might need to configure a local mail server
   - For production, you might want to use a service like SendGrid or SMTP

## Files

- `index.php` - Main contact form
- `send_email.php` - Email sending functionality
- `config.php` - Database configuration (not used in this version)

## Features

- Form validation
- Email sending
- Error handling
- Success messages
- Responsive design
- Security measures (XSS prevention) 