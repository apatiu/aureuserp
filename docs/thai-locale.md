# Running AureusERP in Thai (`th`)

Thai is a supported application language. To make it the default for everyone:

## 1. Set the locale in `.env`

```dotenv
APP_LOCALE=th
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=th_TH
APP_TIMEZONE=Asia/Bangkok
APP_CURRENCY=THB
```

Then clear the cached config:

```bash
php artisan optimize:clear
```

`APP_LOCALE` only takes effect for locales listed in `config/app.php` under
`supported_locales`. Before `th` was added there, `APP_LOCALE=th` was silently
ignored by the `SetLocale` middleware and the app fell back to English.

## 2. Existing users

The locale is picked in this order: `?lang=` in the URL, the session, the
user's saved **Language** (profile / user form), then `APP_LOCALE`. Users who
already saved English keep English. Switch them by:

- choosing **ไทย (Thai)** in the language switcher or on their profile, or
- updating them in bulk:

```bash
php artisan tinker --execute="Webkul\Security\Models\User::query()->update(['language' => 'th'])"
```

New users get `APP_LOCALE` as their default language.

## 3. What is translated

| Area | Status |
| --- | --- |
| Filament core UI (tables, forms, actions, notifications) | Thai, shipped by Filament |
| Laravel validation, auth, pagination and password messages | `lang/th/*.php` |
| Main navigation, app menu, welcome page | `lang/th/admin.php`, `lang/th/welcome.php` |
| Filament Shield, chart widgets, settings pages, icon picker, date range filter, translatable locale switcher | `lang/vendor/*/th` |
| CRM plugin | `plugins/webkul/crm/resources/lang/th` |
| Accounting plugin | `plugins/webkul/accounting/resources/lang/th` |
| Other plugins | Not yet translated; they fall back to English (`APP_FALLBACK_LOCALE`) |

To see which keys are still missing for Thai:

```bash
php artisan translations:check --locale=th
```

To translate another plugin, copy its `resources/lang/en` folder to
`resources/lang/th` and translate the values, keeping every `:placeholder` and
every `|` plural segment.

## 4. Dates and numbers

Laravel sets Carbon's locale from the app locale, so translated dates
(`translatedFormat`, Filament `->date()` / `->since()`) show Thai month and day
names. Years stay in the Gregorian calendar (ค.ศ.); Buddhist Era (พ.ศ.) display
is not built in. Money and number columns are formatted by PHP `intl` using
the `th` locale, so the `intl` extension must be installed.
