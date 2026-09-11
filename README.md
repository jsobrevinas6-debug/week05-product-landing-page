# D' Real Z Responsive Product Landing Page

## Introduction

A product landing page is a focused web page designed to present a product, service, or brand and guide visitors toward a specific action. That action may be buying a product, contacting the business, signing up, or learning more about what the company offers.

Landing pages are important for businesses because they create a strong first impression, communicate value quickly, and make it easier for customers to take action. For small local businesses, a clean landing page can help build trust and make products easier to discover online.

This project is a responsive landing page for **D' Real Z**, a local streetwear and accessories brand from Majayjay, Laguna. The purpose of the project is to transform the business identity, products, and style into a modern Laravel page using Blade components and Tailwind CSS.

## Objectives

- Build a responsive product landing page using Laravel.
- Use Tailwind CSS utility classes for layout, spacing, color, typography, and hover effects.
- Create reusable Blade components for repeated interface elements.
- Apply responsive design for desktop, laptop, tablet, and mobile screens.
- Organize frontend files using Laravel best practices.
- Document the project structure, design choices, and component usage.
- Prepare the project for portfolio presentation through GitHub and LinkedIn.

## Responsive Web Design

This project uses a mobile-first approach. Sections are built in a single-column layout first, then expand into multi-column layouts on larger screens using Tailwind responsive prefixes such as `sm:`, `md:`, and `lg:`.

Responsive breakpoints are used throughout the page. For example, product cards display as one column on mobile, two columns on small screens, and four columns on large screens:

```blade
class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4"
```

Flexbox is used for navigation, hero buttons, headings, and footer alignment. CSS Grid is used for feature cards, pricing plans, testimonials, and product displays.

Responsive design is important because users may visit the page from many devices. A business landing page should be readable, usable, and visually consistent whether it is viewed on a phone, tablet, laptop, or desktop monitor.

## Tailwind CSS

Tailwind CSS is a utility-first CSS framework. Instead of writing many custom CSS classes, this project uses small utility classes directly in the Blade templates.

Examples from this project include:

```blade
class="rounded-lg border border-white/10 bg-white/[0.03] p-7 transition duration-300 hover:-translate-y-2"
```

Advantages of Tailwind CSS used in this project:

- Fast styling directly in Blade files.
- Consistent spacing using utilities like `px-6`, `py-24`, `mt-7`, and `gap-6`.
- Responsive layouts using classes like `sm:grid-cols-2`, `md:flex`, and `lg:grid-cols-3`.
- Reusable component styling for buttons, cards, navigation, and footer.
- Built-in hover and transition utilities for interactive polish.

## Blade Components

Blade components are reusable interface files in Laravel. They help reduce duplicated HTML and make the project easier to maintain. Instead of rewriting the same card markup many times, the page can call a component and pass different content through props.

Reusable components in this project:

- `resources/views/components/navbar.blade.php`
- `resources/views/components/hero.blade.php`
- `resources/views/components/feature-card.blade.php`
- `resources/views/components/pricing-card.blade.php`
- `resources/views/components/testimonial-card.blade.php`
- `resources/views/components/button.blade.php`
- `resources/views/components/footer.blade.php`

Example feature card usage:

```blade
<x-feature-card
    icon="01"
    title="Premium Quality"
    description="Carefully selected clothing and accessories made for everyday wear."
/>
```

Example pricing card usage:

```blade
<x-pricing-card
    name="Real Cuzzi Set"
    price="799"
    image="images/products/map-shirt.jpg"
    :features="[
        'Graphic shirt collection',
        'Accessory pairing option',
        'Priority item reservation',
        'Best for statement outfits'
    ]"
    :featured="true"
/>
```

Using Blade components improves maintainability because design changes can be made in one component file instead of editing repeated sections across the page.

## User Interface Design

The interface uses a dark streetwear-inspired visual direction to match the D' Real Z brand. The main palette is black, near-black, white, and soft gray. This creates strong contrast and keeps the product photos and logo as the main visual focus.

Typography uses bold uppercase headings for a fashion and streetwear feel. Supporting text uses smaller gray copy for clear hierarchy. Buttons use solid and outlined styles so primary actions are easy to identify.

Cards use consistent borders, spacing, hover effects, and `rounded-lg` corners. Product photos are displayed in fixed aspect ratios to keep the layout organized and avoid uneven card heights.

Iconography is represented through simple numbered badges in the feature cards and compact text icons in the footer social links. This keeps the design minimal and readable.

## Folder Structure

```text
week05-product-landing-page/
|-- app/
|-- public/
|   |-- images/
|       |-- logo/
|       |-- products/
|-- resources/
|   |-- css/
|   |-- js/
|   |-- views/
|       |-- components/
|       |-- layouts/
|       |-- pages/
|-- routes/
|-- screenshots/
|-- documentation/
|-- README.md
```

Folder purposes:

- `resources/views/layouts` contains the main Blade layout used by the page.
- `resources/views/components` contains reusable UI components.
- `resources/views/pages` contains full page views, including the landing page.
- `public` stores publicly accessible assets such as logos and product images.
- `screenshots` will store desktop, tablet, mobile, section, folder, and repository screenshots.
- `documentation` will store before-and-after comparison images and supporting project files.

## Screenshots

The required screenshots will be saved using these filenames:

- `screenshots/desktop-layout.png`
- `screenshots/tablet-layout.png`
- `screenshots/mobile-layout.png`
- `screenshots/navigation-bar.png`
- `screenshots/hero-section.png`
- `screenshots/features-section.png`
- `screenshots/pricing-section.png`
- `screenshots/testimonials-section.png`
- `screenshots/footer-section.png`
- `screenshots/blade-components-folder.png`
- `screenshots/github-repository.png`
- `documentation/before-design.png`
- `documentation/after-design.png`

## Before-And-After Comparison

Before: The starting project used the default Laravel README and only had the early landing page structure. Some required components were empty, and several required sections were missing.

After: The final landing page uses a Laravel layout, reusable Blade components, Tailwind CSS, responsive grids, product imagery, pricing cards, testimonials, a call-to-action section, and a complete footer.

## Problems And Solutions

Problem: The original page had incomplete components.

Solution: Reusable `button`, `pricing-card`, and `testimonial-card` components were completed and reused in the landing page.

Problem: The page was missing required activity sections.

Solution: Pricing, testimonials, call-to-action, and footer content were added.

Problem: Some symbols displayed with encoding issues.

Solution: Broken symbols were replaced with clean ASCII-safe text and HTML entities.

## Reflection

This activity helped demonstrate how Laravel Blade components can make a user interface easier to organize and maintain. It also showed the importance of responsive design because a landing page must look professional across different devices. Building the D' Real Z page made the project feel closer to a real business website instead of only a classroom exercise.

## LinkedIn Portfolio Post Draft

Week 5 - Client-Server Technologies

This week, I designed and developed a responsive product landing page for D' Real Z using Laravel, Tailwind CSS, and Blade components. I focused on creating reusable UI components, responsive layouts, and a clean interface for a local streetwear brand.

Comparing the early version with the final design showed how better spacing, visual hierarchy, product images, and reusable components can improve both user experience and maintainability.

Before-and-after screenshots attached.

GitHub Repository: Insert repository link here.

`#Laravel` `#TailwindCSS` `#ResponsiveDesign` `#BladeComponents` `#WebDevelopment` `#UIUX` `#GitHub` `#ClientServer`

## Setup Instructions

Install PHP dependencies:

```bash
composer install
```

Install Node dependencies:

```bash
npm install
```

Copy the environment file and generate an application key:

```bash
cp .env.example .env
php artisan key:generate
```

Run the Laravel development server:

```bash
php artisan serve
```

Run the Vite development server:

```bash
npm run dev
```
