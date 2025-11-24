# mini-government-portal # 📈 Software Development Lifecycle – Mini E-Government Portal

## 1. Requirements Gathering
- Citizens need a way to submit government service requests online (e.g., ID renewal, housing queries).
- Government administrators need a way to view and manage submitted requests.
- The system must be lightweight, easy to run locally, and demonstrate SDLC principles.

## 2. Design
- **Frontend:** HTML/CSS for structure and styling, JavaScript for interactivity and AJAX.
- **Backend:** PHP scripts to handle form submissions, store requests, and update statuses.
- **Storage:** JSON file (`requests.json`) used for persistence instead of a database.
- **Documentation:** README, SDLC.md, and BPMN diagram to explain system flow.

## 3. Implementation
- Citizens submit requests via a form (`index.html`).
- PHP backend (`submit_request.php`) saves requests into `requests.json`.
- Admin dashboard (`admin.html`) fetches requests via `get_requests.php` and allows status updates via `update_status.php`.
- Styling applied with CSS for a professional government look.

## 4. Testing
- **Black-box testing:** Verified form submission, request persistence, and status updates.
- **Frontend testing:** Checked responsiveness and accessibility across browsers.
- **Backend testing:** Ensured JSON file updates correctly and handles multiple requests.

## 5. Deployment
- Runs locally on any PHP-enabled server (e.g., XAMPP).
- Can be hosted on GitHub Pages (frontend) + PHP hosting service (backend).
- Documentation included for easy setup.

## 6. Maintenance & Future Enhancements
- Add authentication for admin login.
- Extend JSON storage to a relational database (MySQL/PostgreSQL) for scalability.
- Implement email notifications for citizens when status changes.
- Improve UI with responsive design and accessibility compliance.
# 🏛️ Mini E-Government Portal

A lightweight full-stack web application that allows citizens to submit service requests (e.g., ID renewal, housing queries) and enables administrators to view and update request statuses. Built using HTML, CSS, JavaScript, PHP, and JSON file storage.

## 🔧 Tech Stack
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Storage:** JSON file (`requests.json`) for persistence
- **Architecture:** Modular folder structure
- **Documentation:** SDLC.md, BPMN diagram, README.md

## 📦 Features
- Citizens can submit service requests via a web form.
- Requests are stored in a JSON file for persistence.
- Admin dashboard displays all requests in a table.
- Admins can update request statuses (Pending → Approved → Rejected).
- Professional styling for a government-like interface.

## 📁 Folder Structure
