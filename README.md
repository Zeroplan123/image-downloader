# 📷 PHP Image Downloader with Live Preview

A simple PHP web app that allows users to:

- 🔗 Input an image URL  
- 👀 Preview the image in real time  
- ✏️ Enter a custom filename without worrying about file extensions  
- ⬇️ Download the image directly to their device with the correct format  

---

## 💡 Features

- ✅ Live preview of image from URL  
- ✅ Smart filename input with automatic `.jpg`, `.png`, etc. extension detection  
- ✅ Download image directly without storing on the server  
- ✅ Supports common formats: JPG, PNG, GIF, WEBP  

---

## 🚀 How It Works

1. Enter a valid image URL
2. Click **Preview** to view the image
3. Click **Download**, and enter the desired filename (e.g. `my-picture`)
4. The correct extension will be automatically added based on the image URL (e.g. `.jpg`)
5. The image is fetched and directly downloaded via PHP (no server storage involved)

---

## 🛠 Tech Stack

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Optional Enhancement:** SweetAlert2 (for better UI prompts — not enabled by default)
