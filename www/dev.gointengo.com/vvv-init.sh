# Init script for WordPress trunk site

echo "Commencing WordPress trunk Setup"

# Make a database, if we don't already have one
echo "Creating database (if it's not already there)"
mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS new"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON new.* TO wp@localhost IDENTIFIED BY 'wp';"

# Check for the presence of a `htdocs` folder.
if [ ! -d htdocs ]
then
    echo "Checking out WordPress SVN"
    # If `htdocs` folder doesn't exist, check out WordPress
    # as that folder
    svn checkout http://svn.automattic.com/wordpress/branches/3.9/ htdocs
    # Change into the `htdocs` folder we've checked SVN out into
    cd htdocs
    # Use WP CLI to create a `wp-config.php` file
    wp core config --dbname="new" --dbuser=wp --dbpass=wp --dbhost="localhost" --allow-root
    # Use WP CLI to install WordPress
    wp core install --url=new.dev --title="WordPress Trunk Auto" --admin_user=root --admin_password=password --admin_email=peb7268@gmail.com --allow-root
    # Change folder to the parent folder of `htdocs`
    cd ..
else
    echo "Updating WordPress SVN"
    # If the `htdocs` folder exists, then run SVN update
    svn up htdocs
fi

# The Vagrant site setup script will restart Nginx for us

# Let the user know the good news
echo "WordPress trunk site now installed";