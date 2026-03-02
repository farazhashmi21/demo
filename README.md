# 🌐 Django Hello World Website Project

A clean, lightweight **four-page static "Hello World" website project** built with the Django web framework. This
project demonstrates the fundamentals of Django's URL routing, template engine, and project structure — making it an
excellent starting point for beginners or a boilerplate for simple web presences.

---

## 📄 Pages

| Page     | URL          | Description                                 |
|----------|--------------|---------------------------------------------|
| Home     | `/`          | Landing page of the website                 |
| About    | `/about/`    | Information about the site or individual    |
| Services | `/services/` | Overview of offerings or skills             |
| Contact  | `/contact/`  | Contact details or a simple contact section |

---

## 🛠️ Tech Stack

| Technology   | Version |
|--------------|---------|
| Python       | 3.x     |
| Django       | 4.x     |
| HTML5 / CSS3 | 5       |

---

## 📁 Project Structure

```
demo/
│
├── hello/                  # Main Django app
│   ├── templates/            # HTML template files
│   │   ├── home.html
│   │   ├── about.html
│   │   ├── services.html
│   │   └── contact.html
│   ├── views.py              # View functions for each page
│   ├── urls.py               # App-level URL patterns
│   └── apps.py
│
├── staticfiles/                   # Static assets (CSS, images, JS)
│   └── hello/
│      └── css/
│       └── style.css
│
├── demo/    # Project configuration
│   ├── settings.py
│   ├── urls.py
│   └── wsgi.py
│
├── manage.py
└── requirements.txt
```

---

## ⚙️ Prerequisites

Before you begin, make sure you have the following installed on your machine:

- [Python 3.x](https://www.python.org/downloads/)
- [pip](https://pip.pypa.io/en/stable/)
- [Git](https://git-scm.com/)
- [Docker](https://docker.com/)

---

## 🚀 Getting Started

Follow these steps to get the project running locally.

### 1. Clone the Repository:

```bash
git clone https://github.com/farazhashmi21/demo.git
cd demo
```

### 2. Build Docker Image And Run

```bash
docker compose up
```

### 3. View in Browser:

Open your web browser and navigate to:

```
http://127.0.0.1:9000/
```

### ENJOY...

---

## 📦 Requirements

The `requirements.txt` file includes the core dependencies:

```
Django>=4.0
```

To regenerate the file at any time, run:

```bash
pip freeze > requirements.txt
```

---

## 🎨 Customization

- **Templates** — Edit the HTML files inside `website/templates/` to change page content.
- **Styling** — Update `static/css/style.css` to modify the look and feel.
- **Pages** — Add new pages by creating a view in `views.py`, a template in `templates/`, and registering the URL in
  `urls.py`.

---

## 🤝 Contributing

Contributions are welcome! To contribute:

1. Fork the repository
2. Create a new branch (`git checkout -b feature/your-feature`)
3. Commit your changes (`git commit -m 'Add your feature'`)
4. Push to the branch (`git push origin feature/your-feature`)
5. Open a Pull Request

---

## 📃 License

This project is licensed under the [MIT License](LICENSE).

---

## 👤 Author

**Engr Faraz Hashmi**

- GitHub: [@farazhashmi21](https://github.com/farazhashmi21/)
- Email: developerfaraz@yahoo.com

---

> Built with ❤️ using [Django](https://www.djangoproject.com/)
