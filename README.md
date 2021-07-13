![Card](https://wartner.io/og/opengraph.png)
[![Code formatting](https://github.com/fwartner/wartner.io/actions/workflows/format.yml/badge.svg?branch=main)](https://github.com/fwartner/wartner.io/actions/workflows/format.yml)
# wartner.io Source
This repository contains the source of my website.

## Tech Stack
**Client:** Alpinejs, TailwindCSS

**Backend:** Laravel, Livewire

**Server:** PHP

## Run Locally
Clone the project
```bash
  git clone https://github.com/fwartner/wartner.io.git
```

Prepare the project
```bash
  cd wartner.io
  cp .env.example .env
```

Install dependencies
```bash
  composer Install
  yarn && yarn run dev
```

## Deployment
To deploy this project follow the official laravel documentation: https://laravel.com/docs/8.x/deployment
