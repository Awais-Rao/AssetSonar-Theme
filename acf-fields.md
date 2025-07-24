# ACF Field Groups Setup Instructions

If ACF Pro is not available or PHP-based registration is not working, follow the steps below to manually create the required ACF field groups and assign them to the appropriate Gutenberg blocks.

## Prerequisites

- Install and activate the **Advanced Custom Fields** plugin (preferably **ACF Pro** to support blocks).
- Install a theme that includes this block setup (this theme assumes custom blocks like `acf/hero`, `acf/nav-bar`, etc.).

---

## Field Group 1: **Navigation Bar**

**Group Name:** `Navigation Bar`  
**Location Rule:** `Block` is equal to `acf/nav-bar`

### Fields:
1. **Logo**
   - Type: Image
   - Return Format: Array
   - Preview Size: Thumbnail

2. **Nav Links** (Repeater)
   - Layout: Table
   - Button Label: Add Link

   - **Sub Fields:**
     - **Label** (Text) — Default Value: Menu Item
     - **Link** (Link) — Return Format: Array

---

## Field Group 2: **Hero Section**

**Group Name:** `Hero Section`  
**Location Rule:** `Block` is equal to `acf/hero`

### Fields:
1. **Headline** — Text  
2. **Supporting Text** — Textarea  
3. **Button Text** — Text  
4. **Button Link** — Link (Return Format: Array)  
5. **Hero Image** — Image (Return Format: Array, Preview Size: Medium)

---

## Field Group 3: **Feature Section**

**Group Name:** `Feature Section`  
**Location Rule:** `Block` is equal to `acf/features-section`

### Fields:
1. **Section Heading** — Text  
2. **Section Description** — Text  
3. **Features** (Repeater)
   - Layout: Table

   - **Sub Fields:**
     - **Image** (Image, Return Format: Array, Preview Size: Medium)
     - **Heading** (Text)
     - **Description** (Textarea)

---

## Field Group 4: **Contact Us Section**

**Group Name:** `Contact Us Section`  
**Location Rule:** `Block` is equal to `acf/contact-form`

### Fields:
1. **Section Title** — Text  
2. **Heading** — Text  
3. **Description** — Textarea  
4. **Address** — Text  
5. **Email Address** — Email

---

## Field Group 5: **Testimonials Section**

**Group Name:** `Testimonials Section`  
**Location Rule:** `Block` is equal to `acf/testimonial`

### Fields:
1. **Section Heading** — Text  
2. **Testimonials** (Repeater)
   - Layout: Table

   - **Sub Fields:**
     - **Quote** (Text) — Default: _Lorem ipsum dolor sit amet..._
     - **Name** (Text) — Default: _John Vick_
     - **Designation** (Text) — Default: _CEO_
     - **Photo** (Image, Return Format: Array, Preview Size: Medium)

---

## Notes

- Make sure the block names like `acf/hero`, `acf/nav-bar`, etc. match your `acf_register_block_type()` names.
- These fields are expected to be used in custom ACF Blocks defined in the theme.
- If you're using **PHP-based registration**, make sure ACF Pro is active and the `acf_add_local_field_group()` code is hooked to `acf/init`.

