CakePHP JSON AND REST
=====================
Basic Setup
-----------

1. Create mapResources

```php
//In app/Config/routes.php...

Router::mapResources('states'); //table
Router::parseExtensions('json'); //extention eg. json, xml
```

2. Create Statement StatesController.php

```php
// Controller/StatesController.php
class StatesController extends AppController {

    public $components = array('RequestHandler');

    public function index() {
        $states = $this->State->find('all');
        $this->set(array(
        'states' => $states,
            '_serialize' => array('states')
        ));
    }
```
3. Create model State.php
   Write like normally

4. Test http://<server>/<project>/states.json


Database
--------
```go
--
-- Database: `jsonstates`
--

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Johor'),
(2, 'Kedah'),
(3, 'Kelantan'),
(4, 'Melaka'),
(5, 'Negeri Sembilan'),
(6, 'Pahang'),
(7, 'Pulau Pinang'),
(8, 'Perak'),
(9, 'Perlis'),
(10, 'Selangor'),
(11, 'Terengganu'),
(12, 'Sabah'),
(13, 'Sarawak'),
(14, 'Wilayah Persekutuan Kuala Lumpur'),
(15, 'Wilayah Persekutuan Labuan'),
(16, 'Wilayah Persekutuan Putrajaya');

```
Reference
----------
<ol>
<li>http://book.cakephp.org/2.0/en/development/rest.html</li>
<li>http://book.cakephp.org/2.0/en/views/json-and-xml-views.html</li>
</ol>

Get Support!
------------

[#cakephp](http://webchat.freenode.net/?channels=#cakephp) on irc.freenode.net - Come chat with us, we have cake

[Google Group](https://groups.google.com/group/cake-php) - Community mailing list and forum

[GitHub Issues](https://github.com/cakephp/cakephp/issues) - Got issues? Please tell us!

[Roadmaps](https://github.com/cakephp/cakephp/wiki#roadmaps) - Want to contribute? Get involved!

[![Bake Status](https://secure.travis-ci.org/cakephp/cakephp.png?branch=master)](http://travis-ci.org/cakephp/cakephp)

![Cake Power](https://raw.github.com/cakephp/cakephp/master/lib/Cake/Console/Templates/skel/webroot/img/cake.power.gif)
