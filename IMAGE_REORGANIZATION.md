# Grand Satya — Image Folder Reorganization Plan

## Current State
Asset images scattered across multiple locations:
- `public/grand_satya_assets/` — Hero backgrounds (6 files)
- `public/anyar/img/` — Mixed structure with 8+ subfolders
  - `ourdriver/` (4 files) 
  - `clients/` (28+ files, only 5 used)
  - Root level: fix-img.jpeg, maps, icons, etc.
  - UNUSED: `blog/`, `car/`, `cars/`, `team/` folders

## New Structure (Clean & Organized)
```
public/images/
├── hero/               # All hero background images
│   ├── hero-home.jpg
│   ├── hero-about.jpg (original)
│   ├── hero-about-2.jpg (NEW — better quality)
│   ├── hero-services.jpg
│   ├── hero-fleet.jpg
│   ├── hero-blog.jpg
│   ├── hero-contact.jpg (original)
│   └── hero-contact-2.jpg (NEW — better quality)
├── drivers/            # Team/driver photos
│   ├── driver-1.jpg
│   ├── driver-2.jpg
│   ├── driver-3.jpg
│   └── driver-4.jpg
├── team/               # NEW — Professional team photos
│   ├── team-1.jpg
│   ├── team-2.jpg
│   ├── team-3.jpg
│   └── team-4.jpg
├── clients/            # Client logos (only used ones)
│   ├── azure.png
│   ├── swadayagraha.png
│   ├── makadia.jpg
│   ├── client-8.png
│   └── swadaya-raya.png
├── cars/               # NEW — Real fleet photos (luxury cars)
│   ├── alphard.jpg
│   ├── fortuner.jpg
│   ├── lexus.jpg
│   ├── lexus-2.jpg
│   ├── lexus-3.jpg
│   ├── bmw.jpg
│   ├── pajero.jpg
│   ├── camry.jpg
│   ├── innova.jpg
│   ├── hilux.jpg
│   ├── corolla-cross.jpg
│   ├── avanza.jpg
│   ├── car-1.jpg (sample car shots)
│   ├── car-2.jpg
│   ├── car-3.jpg
│   ├── car-5.jpg
│   ├── car-8.jpg
│   ├── car-10.jpg
│   ├── car-15.jpg
│   └── car-20.jpg
├── content/            # Content images (maps, car samples, CTA)
│   ├── fleet-sample.png
│   ├── cta-background.jpg
│   ├── map-indonesia.jpg
│   ├── map-fallback.jpg
│   ├── via.jpg (NEW)
│   └── portfolio.jpg (NEW)
└── icons/              # Value icons
    ├── icon-integrity.png
    ├── icon-professional.png
    ├── icon-commitment.png
    └── icon-teamwork.png
```

## Migration Map

### Hero Images (6 files)
| Old Path | New Path | Used In |
|----------|----------|---------|
| `grand_satya_assets/hero_fleet_ops_1782823663240.png` | `images/hero/hero-home.jpg` | index.blade.php |
| `grand_satya_assets/page/home/angel_atas.png` | `images/hero/hero-about.jpg` | pages/about.blade.php |
| `grand_satya_assets/page/home/angle_samping.png` | `images/hero/hero-services.jpg` | pages/services.blade.php |
| `grand_satya_assets/hero2.png` | `images/hero/hero-fleet.jpg` | fleet.blade.php, fleet-detail.blade.php |
| `grand_satya_assets/hero1.png` | `images/hero/hero-blog.jpg` | blog.blade.php, blog-detail.blade.php |
| `grand_satya_assets/page/home/angle_depan.jpg` | `images/hero/hero-contact.jpg` | pages/contact.blade.php |

### Driver Photos (4 files)
| Old Path | New Path |
|----------|----------|
| `anyar/img/ourdriver/driver (0).jpeg` | `images/drivers/driver-1.jpg` |
| `anyar/img/ourdriver/driver (1).jpeg` | `images/drivers/driver-2.jpg` |
| `anyar/img/ourdriver/driver (2).jpeg` | `images/drivers/driver-3.jpg` |
| `anyar/img/ourdriver/driver (3).jpeg` | `images/drivers/driver-4.jpg` |

### Client Logos (5 files)
| Old Path | New Path |
|----------|----------|
| `anyar/img/clients/azure.png` | `images/clients/azure.png` |
| `anyar/img/clients/swadayagraha.png` | `images/clients/swadayagraha.png` |
| `anyar/img/clients/makadia.jpeg` | `images/clients/makadia.jpg` |
| `anyar/img/clients/client-8.png` | `images/clients/client-8.png` |
| `anyar/img/clients/LOGO SWADAYA RAYA.png` | `images/clients/swadaya-raya.png` |

### Content Images (4 files)
| Old Path | New Path |
|----------|----------|
| `anyar/img/sewamobilmewah.png` | `images/content/fleet-sample.png` |
| `anyar/img/fix-img.jpeg` | `images/content/cta-background.jpg` |
| `anyar/img/grand-map.jpeg` | `images/content/map-indonesia.jpg` |
| `anyar/img/fix-map-gs.jpeg` | `images/content/map-fallback.jpg` |

### Value Icons (4 files)
| Old Path | New Path |
|----------|----------|
| `anyar/img/icon (1).png` | `images/icons/icon-integrity.png` |
| `anyar/img/icon (2).png` | `images/icons/icon-professional.png` |
| `anyar/img/icon (3).png` | `images/icons/icon-commitment.png` |
| `anyar/img/icon (4).png` | `images/icons/icon-teamwork.png` |

## Files to Update
All blade files with `asset()` calls:
1. `resources/views/index.blade.php`
2. `resources/views/pages/about.blade.php`
3. `resources/views/pages/services.blade.php`
4. `resources/views/pages/contact.blade.php`
5. `resources/views/pages/gallery.blade.php`
6. `resources/views/fleet.blade.php`
7. `resources/views/fleet-detail.blade.php`
8. `resources/views/blog.blade.php`
9. `resources/views/blog-detail.blade.php`

## Folders to Delete (After Verification)
- `public/grand_satya_assets/` (after moving hero images)
- `public/anyar/img/blog/` (unused)
- `public/anyar/img/car/` (unused, fleet photos from Storage)
- `public/anyar/img/cars/` (unused)
- `public/anyar/img/team/` (unused)
- `public/anyar/img/clients/` (after moving 5 used logos, rest unused)
- `public/anyar/media/` (entire folder unused, admin template stuff)

## Benefits
✅ Clean, logical folder structure
✅ Descriptive file names (no more "driver (1)" or "icon (1)")
✅ Easy to find and manage
✅ Reduced public/ size (delete unused ~50MB of template media)
✅ Faster asset loading (less clutter)

## Implementation Status
- [x] Created new folder structure
- [x] Copy/move images to new locations
- [x] Update all blade file paths
- [x] Added NEW professional car photos (12 fleet photos)
- [x] Added NEW team photos (4 professional headshots)
- [x] Updated hero backgrounds to higher quality versions
- [ ] Test all pages
- [ ] Delete old folders after verification

## UPDATED PHOTOS IN USE
**Hero backgrounds now use better quality:**
- Contact page: `hero-contact-2.jpg` (from about-bg.png)
- About page: `hero-about-2.jpg` (from contact-bg.png)

**Car photos upgraded to real fleet:**
- FAQ section: Fortuner + Alphard (from generic car photo)
- Why Choose Us: Lexus (from generic background)
- CTA Banner: Lexus-2 (from sample car)
