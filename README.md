# Dockerized Moodle Setup

This repository contains Docker configuration files to run Moodle 4.5+ with all required dependencies.

## Requirements

- Docker and Docker Compose installed on your system
- Minimum 2GB RAM recommended for Docker

## Quick Start

1. Clone this repository
2. Run the following command to start Moodle:

```bash
docker-compose up -d
```

3. Access Moodle at http://localhost:8080

## Configuration

### Database Options

The default setup uses PostgreSQL 14, but you can switch to MySQL 8.4 or MariaDB 10.11 by uncommenting the appropriate section in the `docker-compose.yml` file.

### Environment Variables

You can customize your Moodle installation by modifying the environment variables in the `docker-compose.yml` file:

- `MOODLE_DATABASE_TYPE`: Database type (pgsql, mysqli)
- `MOODLE_DATABASE_HOST`: Database hostname
- `MOODLE_DATABASE_PORT`: Database port
- `MOODLE_DATABASE_NAME`: Database name
- `MOODLE_DATABASE_USER`: Database username
- `MOODLE_DATABASE_PASSWORD`: Database password
- `MOODLE_SITE_FULLNAME`: Full name of your Moodle site
- `MOODLE_SITE_SHORTNAME`: Short name of your Moodle site
- `MOODLE_ADMIN_USER`: Admin username
- `MOODLE_ADMIN_PASSWORD`: Admin password
- `MOODLE_ADMIN_EMAIL`: Admin email address

## Volumes

- `moodledata`: Persistent storage for Moodle data
- `postgres_data`: Persistent storage for PostgreSQL data (or mysql_data/mariadb_data if using MySQL/MariaDB)

## Technical Details

- PHP 8.2+ with all required extensions
- PHP `max_input_vars` set to 5000
- Sodium extension enabled
- Apache web server with mod_rewrite enabled
- PostgreSQL 14 (default), MySQL 8.4, or MariaDB 10.11 options available

## Production Deployment

For production deployment, consider:

1. Using a reverse proxy with SSL termination
2. Setting up regular backups for the database and moodledata volume
3. Adjusting PHP and database settings for better performance
4. Setting secure passwords for all services

## Troubleshooting

If you encounter issues:

1. Check Docker logs: `docker-compose logs -f`
2. Verify database connection settings
3. Ensure proper permissions on the moodledata directory