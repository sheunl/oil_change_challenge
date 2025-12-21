# Oil Change Calculator

A Laravel application that calculates when your next oil change is due based on mileage and time since the last oil change.

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js & NPM

## Setup Instructions

1. **Clone the repository**
   ```bash
   git clone [<repository-url>](https://github.com/sheunl/oil_change_challenge)
   cd oil_change_challenge
   ```

2. **Install PHP , JavaScript dependencies; Set up environment file & run migrations**
   ```bash
   composer setup
   ```

## Running the Application

Start the development server:

```bash
composer serve
```

The application will be available at `http://localhost:8000` or another port if port `8000` is unavailable

For development with hot reload:
```bash
composer run dev
```

## Usage

Visit the home page and enter:
- Current odometer reading (km)
- Date of previous oil change
- Odometer reading at previous oil change (km)

The app will calculate if an oil change is needed based on:
- Distance traveled (5,000 km threshold)
- Time elapsed (6 months threshold)
