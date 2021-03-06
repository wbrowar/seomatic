<?php
namespace Craft;

class Seomatic_SettingsModel extends BaseModel
{
    /**
     * @access protected
     * @return array
     */
    protected function defineAttributes()
    {
        return array_merge(parent::defineAttributes(), array(
            'locale'                            => array(AttributeType::String, 'default' => craft()->language),

/* --------------------------------------------------------------------------------
    SITEMETA settings
-------------------------------------------------------------------------------- */

            'siteSeoName'                       => array(AttributeType::String, 'default' => craft()->getSiteName()),
            'siteSeoTitle'                      => array(AttributeType::String, 'default' => 'This is the default global title of the site pages.'),
            'siteSeoTitleSeparator'             => array(AttributeType::String, 'default' => '|'),
            'siteSeoTitlePlacement'             => array(AttributeType::Enum, 'values' => "before,after,none", 'default' => 'after'),
            'siteSeoDescription'                => array(AttributeType::String, 'default' => 'This is the default global natural language description of the content on the site pages.'),
            'siteSeoKeywords'                   => array(AttributeType::String, 'default' => 'default,global,comma-separated,keywords'),
            'siteTwitterCardType'               => array(AttributeType::String, 'default' => 'summary'),
            'siteOpenGraphType'                 => array(AttributeType::String, 'default' => 'website'),
            'siteSeoImageId'                    => array(AttributeType::Number, 'default' => null),
            'siteRobots'                        => array(AttributeType::String, 'default' => ''),

/* --------------------------------------------------------------------------------
    IDENTITY settings
-------------------------------------------------------------------------------- */

            'googleSiteVerification'            => array(AttributeType::String, 'default' => ''),
            'siteOwnerType'                     => array(AttributeType::String, 'default' => 'corporation'),

/* -- Generic owner fields */

            'genericOwnerName'                  => array(AttributeType::String, 'default' => craft()->getSiteName()),
            'genericOwnerAlternateName'         => array(AttributeType::String, 'default' => ''),
            'genericOwnerDescription'           => array(AttributeType::String, 'default' => ''),
            'genericOwnerUrl'                   => array(AttributeType::String, 'default' => craft()->getSiteUrl()),
            'genericOwnerImageId'               => array(AttributeType::String, 'default' => ''),
            'genericOwnerTelephone'             => array(AttributeType::String, 'default' => ''),
            'genericOwnerEmail'                 => array(AttributeType::String, 'default' => ''),
            'genericOwnerStreetAddress'         => array(AttributeType::String, 'default' => ''),
            'genericOwnerAddressLocality'       => array(AttributeType::String, 'default' => ''),
            'genericOwnerAddressRegion'         => array(AttributeType::String, 'default' => ''),
            'genericOwnerPostalCode'            => array(AttributeType::String, 'default' => ''),
            'genericOwnerAddressCountry'        => array(AttributeType::String, 'default' => ''),
            'genericOwnerGeoLatitude'           => array(AttributeType::String, 'default' => ''),
            'genericOwnerGeoLongitude'          => array(AttributeType::String, 'default' => ''),

/* -- Corporation owner fields http://schema.org/Organization */

            'organizationOwnerDuns'             => array(AttributeType::String, 'default' => ''),
            'organizationOwnerFounder'          => array(AttributeType::String, 'default' => ''),
            'organizationOwnerFoundingDate'     => array(AttributeType::String, 'default' => ''),
            'organizationOwnerFoundingLocation' => array(AttributeType::String, 'default' => ''),

/* -- Corporation owner fields http://schema.org/Corporation */

            'corporationOwnerTickerSymbol'      => array(AttributeType::String, 'default' => ''),

/* -- Restaurant owner fields https://schema.org/Restaurant */

            'restaurantOwnerServesCuisine'      => array(AttributeType::String, 'default' => ''),

/* -- Person owner fields https://schema.org/Person */

            'personOwnerGender'                 => array(AttributeType::String, 'default' => ''),
            'personOwnerBirthPlace'             => array(AttributeType::String, 'default' => ''),

/* --------------------------------------------------------------------------------
    SOCIAL settings
-------------------------------------------------------------------------------- */

            'twitterHandle'                     => array(AttributeType::String, 'default' => ''),
            'facebookHandle'                    => array(AttributeType::String, 'default' => ''),
            'facebookProfileId'                 => array(AttributeType::String, 'default' => ''),
            'linkedInHandle'                    => array(AttributeType::String, 'default' => ''),
            'googlePlusHandle'                  => array(AttributeType::String, 'default' => ''),
            'youtubeHandle'                     => array(AttributeType::String, 'default' => ''),
            'instagramHandle'                   => array(AttributeType::String, 'default' => ''),
            'pinterestHandle'                   => array(AttributeType::String, 'default' => ''),

/* --------------------------------------------------------------------------------
    CEATOR settings
-------------------------------------------------------------------------------- */

            'siteCreatorType'                   => array(AttributeType::String, 'default' => 'corporation'),

/* -- Generic Creator fields */

            'genericCreatorName'                => array(AttributeType::String, 'default' => ''),
            'genericCreatorAlternateName'       => array(AttributeType::String, 'default' => ''),
            'genericCreatorDescription'         => array(AttributeType::String, 'default' => ''),
            'genericCreatorUrl'                 => array(AttributeType::String, 'default' => ''),
            'genericCreatorImageId'             => array(AttributeType::String, 'default' => ''),
            'genericCreatorTelephone'           => array(AttributeType::String, 'default' => ''),
            'genericCreatorEmail'               => array(AttributeType::String, 'default' => ''),
            'genericCreatorStreetAddress'       => array(AttributeType::String, 'default' => ''),
            'genericCreatorAddressLocality'     => array(AttributeType::String, 'default' => ''),
            'genericCreatorAddressRegion'       => array(AttributeType::String, 'default' => ''),
            'genericCreatorPostalCode'          => array(AttributeType::String, 'default' => ''),
            'genericCreatorAddressCountry'      => array(AttributeType::String, 'default' => ''),
            'genericCreatorGeoLatitude'         => array(AttributeType::String, 'default' => ''),
            'genericCreatorGeoLongitude'        => array(AttributeType::String, 'default' => ''),

/* -- Corporation Creator fields http://schema.org/Organization */

            'organizationCreatorDuns'           => array(AttributeType::String, 'default' => ''),
            'organizationCreatorFounder'        => array(AttributeType::String, 'default' => ''),
            'organizationCreatorFoundingDate'   => array(AttributeType::String, 'default' => ''),
            'organizationCreatorFoundingLocation'   => array(AttributeType::String, 'default' => ''),

/* -- Corporation Creator fields http://schema.org/Corporation */

            'corporationCreatorTickerSymbol'    => array(AttributeType::String, 'default' => ''),

/* -- Restaurant Creator fields https://schema.org/Restaurant */

            'restaurantCreatorServesCuisine'    => array(AttributeType::String, 'default' => ''),

/* -- Person Creator fields https://schema.org/Person */

            'personCreatorGender'               => array(AttributeType::String, 'default' => ''),
            'personCreatorBirthPlace'           => array(AttributeType::String, 'default' => ''),

/* -- Humans.txt */

            'genericCreatorHumansTxt'           => array(AttributeType::Mixed, 'default' => $this->getDefaultHumans()),
        ));
    }

/* --------------------------------------------------------------------------------
    Get the default Humans.txt template
-------------------------------------------------------------------------------- */

    public function getDefaultHumans()
    {
        $oldPath = craft()->path->getTemplatesPath();
        $newPath = craft()->path->getPluginsPath().'seomatic/templates';
        craft()->path->setTemplatesPath($newPath);

/* -- Return the Humans.txt default template */

        $templateName = '_humansDefault';
        $loader = new TemplateLoader;
        $template = $loader->getSource($templateName);
        
        craft()->path->setTemplatesPath($oldPath);
        
        return $template;
    } /* -- _getDefaultHumans */
} /* -- class Seomatic_SettingsModel */