<?php
/* Template Name: Contact Page */
get_header(); ?>

<div class="container mx-auto p-4 text-center">
    <h1 class="text-4xl font-bold mb-6">Contact Us</h1>
    
    <p class="mb-4">Feel free to reach out via the form below:</p>

    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="space-y-4">
        <input type="hidden" name="action" value="submit_contact_form">
        
        <div>
            <label for="name" class="block text-lg">Your Name:</label>
            <input type="text" name="name" id="name" class="border p-2 w-full" required>
        </div>
        
        <div>
            <label for="email" class="block text-lg">Your Email:</label>
            <input type="email" name="email" id="email" class="border p-2 w-full" required>
        </div>
        
        <div>
            <label for="message" class="block text-lg">Your Message:</label>
            <textarea name="message" id="message" class="border p-2 w-full" rows="6" required></textarea>
        </div>
        
        <div>
            <input type="submit" value="Send Message" class="bg-blue-500 text-white px-6 py-2 rounded">
        </div>
    </form>
</div>

<?php get_footer(); ?>
