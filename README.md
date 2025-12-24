# Oil Change Calculator

A Laravel application that calculates when your next oil change is due based on mileage and time since the last oil change.

## Requirements

- Using DDEV to simplify running across various platforms, Follow this [Link](https://docs.ddev.com/en/stable/users/install/ddev-installation/) to learn how to install and setup ddev.


## Setup Instructions

1. **Clone the repository**
   ```bash
   git clone [<repository-url>](https://github.com/sheunl/oil_change_challenge)
   cd oil_change_challenge
   ```

2. **Install PHP , JavaScript dependencies; Set up environment file & run migrations**
   ```bash
   ddev composer setup
   ```

## Launch the Application

```bash
ddev launch
```

The application will be available at `https://oil-change-challenge.ddev.site/` and should open automatically in your browser

For development with hot reload:
```bash
ddev composer run dev
```

## Usage

Visit the home page and enter:
- Current odometer reading (km)
- Date of previous oil change
- Odometer reading at previous oil change (km)

The app will calculate if an oil change is needed based on:
- Distance traveled (5,000 km threshold)
- Time elapsed (6 months threshold)
