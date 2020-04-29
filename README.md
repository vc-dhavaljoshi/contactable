# Contact

**Contacts** is a polymorphic Laravel package, for contact management system. You can add contacts to any eloquent model with ease.

## Installation

1. Install the package via composer:
    ```shell
    composer require viitortest/contactable
    ```

2. Publish resources (migrations and config files):
    ```shell
    php artisan vendor:publish --tag=contact-migrations
    php artisan vendor:publish --tag=contact-config
    ```

3. Execute migrations via the following command:
    ```shell
    php artisan migrate
    ```

4. Done!


## Usage

To add contacts support to your eloquent models simply use `\Viitortest\Contacts\Traits\HasContacts` trait.

### Manage your contacts

```php
// Get instance of your model
$user = new \App\Models\User::find(1);

// Create a single contact
$user->addContact([
    'name' => 'Dhaval Joshi',
    'email' => 'dhaval@example.com',
    'phone' => '9999999999',
]);

// Create a multiple contacts
$user->addManyContacts(
[
    [
    'name' => 'Dhaval Joshi',
    'email' => 'dhaval@example.com',
    'phone' => '9999999999',
    ],
    [
    'name' => 'Shailesh Jakhaniya',
    'email' => 'shailesh@example.com',
    'phone' => '9999999999',
    ]
]);

// Find an existing contact
$contact = Contactable::find(1);

// Update an existing contact
$contact->update([
    'email' => 'iOmranic@gmail.com',
]);

// Delete contact
$contact->delete();

// Alternative way of contact deletion
$user->contacts()->where('id', 123)->first()->delete();

// Get attached contacts collection
$user->contacts;

// Get attached contacts query builder
$user->contacts();
```
