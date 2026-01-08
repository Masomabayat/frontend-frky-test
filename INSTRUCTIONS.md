# 🧪 Technical Test - Frontend Developer

---

## 📋 Context
The marketing team wants to run A/B tests on the current sales funnel. Following their requests, the project manager has assigned you several technical modifications to implement.

---

## 🎯 Objectives
Create a new GitHub branch and implement the requested modifications:

---

### 📄 Sales Page Modifications (`index.php`)
**Mission 1: Replace the current video with the provided one** (see 📐 Provided Resources section)
- We use VTURB as our video service

**Mission 2: Adjust the reveal timing**
- Modify the `ctaTime` variable 
- New value: 10 seconds

**Mission 3: "Product Composition" Toggle**
- Add a "Product Composition" element in the footer
- Implement a toggle system to show/hide the product label (see 📐 Provided Resources section)
- The label should appear below the footer links
- **Bonus**: Synchronize this link's appearance with the content reveal

---

### 🔀 Upsell/Downsell Routing - Context
Currently, all users are redirected to `faites-le-plein.php` after checkout. The goal is to customize this redirection based on the quantity selected at checkout:

**Mission 1: Duplicate the upsell pages**
- `faites-le-plein.php` → `faites-le-plein-6.php`
- `derniere-chance.php` → `derniere-chance-6.php`
- Replace the meta titles of these pages with "HépaLiv - Faites le plein 6" and "HépaLiv - Dernière chance 6"
- In the HTML of these pages, replace the number of boxes offered to 6 (this is a test, visuals and amounts don't matter)
- Make sure these two new pages are properly linked to each other

**Mission 2: Adapt the checkout**
- Currently, the default checkout quantity is 6. You need to change it to 3
- Develop JavaScript logic so that users only reach your new upsells when the selected quantity is "6"
- You can use the HTML attributes of the `choose-price` buttons

---

### ✅ Confirmation (`confirmation.php`)
**Mission 1: Modify the phone number**
- Currently, the header phone number is hardcoded in this page
- Replace it with a dynamic value by following the logic used in the checkout page

---

## 🏗️ Project Structure
```
frontend-frky-test/
├── index.php                    # Landing page
├── etape-2.php                  # Checkout form
├── faites-le-plein.php          # Upsell page
├── derniere-chance.php          # Downsell page
├── confirmation.php             # Order confirmation
│
├── assets/
│   ├── css/
│   │   └── ...
│   │  
│   ├── js/
│   │   └── ...
│   │  
│   └── images/
│       └── ...
│
└── includes/
    └── ...
```

---

## 📐 Provided Resources

### 📹 Video for index page

Replace the current video with the following Vturb player:
```html
<vturb-smartplayer id="vid-68e8c54bc98b7a8c52bb5f49" style="display: block; margin: 0 auto; width: 100%;"></vturb-smartplayer>
<script type="text/javascript">
    var s = document.createElement("script");
    s.src = "https://scripts.converteai.net/4a5b918c-a976-4f02-bd7f-e230b18b1475/players/68e8c54bc98b7a8c52bb5f49/v4/player.js";
    s.async = true;
    document.head.appendChild(s);
</script>
```

### 🏷️ Product label for footer

Image available at: `assets/images/label.png`

---

## 💬 Post-Test Feedback

At the end of the test, please create a `FEEDBACK-yourName.md` file at the project root and answer the following questions:

1. **Strengths**: Which missions did you find easy or interesting?
2. **Difficulties encountered**: What were your main difficulties or blockers?
3. **Remarks**: General comments about the test or the project

---

**Good luck! 🚀**