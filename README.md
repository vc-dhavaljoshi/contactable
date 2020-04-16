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

// Create a new contact
$user->contacts()->create([
    'first_name' => 'dhaval',
    'last_name' => 'joshi',
    'email' => 'test@example.com',
    'phone' => '9999999999',
    'birth_date' => '1987-06-18',
    'is_primary' => 1,
    'extra_attributes' => [{'country':'India'}] 
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
