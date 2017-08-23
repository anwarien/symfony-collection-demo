<?php

namespace Fuz\AppBundle\Menu;

use Fuz\QuickStartBundle\Base\BaseMenu;
use Knp\Menu\FactoryInterface;

class Builder extends BaseMenu
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $this->createMenu($factory, parent::POSITION_LEFT);
        $this->addRoute($menu, 'Home', 'home');

        $this->addSubMenu($menu, 'Basic usage');
        $this->addRoute($menu['Basic usage'], 'A simple collection', 'basic');
        $this->addRoute($menu['Basic usage'], 'Using a "position" column', 'positionField');
        $this->addRoute($menu['Basic usage'], 'Using a table instead of divs', 'inATable');

        $this->addSubMenu($menu, 'JavaScript Options');
        $this->addRoute($menu['JavaScript Options'], "Overview", 'overview', [], [], true);
        $this->addRoute($menu['JavaScript Options'], "Customize buttons' layout", 'customButtons');
        $this->addRoute($menu['JavaScript Options'], 'Enable / disable buttons', 'enableButtons');
        $this->addRoute($menu['JavaScript Options'], "Control number of collection elements", 'numberCollectionElements');
        $this->addRoute($menu['JavaScript Options'], 'Put only one Add button at the bottom', 'addButtonAtTheBottom');
        $this->addRoute($menu['JavaScript Options'], 'Button event callbacks', 'eventCallbacks');
        $this->addRoute($menu['JavaScript Options'], 'Initialization callbacks', 'initCallbacks');
        $this->addRoute($menu['JavaScript Options'], 'If you don\'t want to use built-in form theme', 'withoutFormTheme');
        $this->addRoute($menu['JavaScript Options'], 'Initialized with a given minimum of elements', 'givenMinimumElements');
        $this->addRoute($menu['JavaScript Options'], 'Hide Up and Down buttons on useless elements', 'hideMoveUpDown');
        $this->addRoute($menu['JavaScript Options'], 'Drag & Drop', 'dragAndDrop');
        $this->addRoute($menu['JavaScript Options'], 'Add button at a custom location', 'buttonsCustomLocation');
        $this->addRoute($menu['JavaScript Options'], 'FadeIn & FadeOut on element actions', 'fadeInFadeOut');

        $this->addSubMenu($menu, 'Advanced usage');
        $this->addRoute($menu['Advanced usage'], 'A better MVC Compliance', 'mvcCompliance');
        $this->addRoute($menu['Advanced usage'], 'Custom form theme with a single field', 'customFormTheme');
        $this->addRoute($menu['Advanced usage'], 'Custom form theme wtih multiple fields', 'formHavingSeveralFields');
        $this->addRoute($menu['Advanced usage'], 'Custom form theme with only one add button', 'customFormThemeAddBottom');
        $this->addRoute($menu['Advanced usage'], 'Custom form theme with several aligned fields', 'fancyFormTheme');
        $this->addRoute($menu['Advanced usage'], 'Form having several collections', 'formWithSeveralCollections');
        $this->addRoute($menu['Advanced usage'], 'Nested form collections', 'collectionOfCollections');
        $this->addRoute($menu['Advanced usage'], 'Usage with Doctrine', 'usageWithDoctrine');

        $this->addSubMenu($menu, 'Troubleshoot');
        $this->addRoute($menu['Troubleshoot'], 'Hide form labels', 'hideFormLabels');
        $this->addRoute($menu['Troubleshoot'], 'Test with another jQuery version', 'customJqueryVersion');

        $this->addSubMenu($menu, 'Symfony 3.x');
        $this->addUri($menu['Symfony 3.x'], 'Switch to Symfony 2.x', '/symfony2');

        $this->addUri($menu, 'Download', 'https://github.com/ninsuo/symfony-collection');

        return $menu;
    }

    public function userMenu(FactoryInterface $factory, array $options)
    {
        $menu = $this->createMenu($factory, parent::POSITION_LEFT);
        $this->addRoute($menu, 'quickstart.menu.home', 'home');

        return $menu;
    }
}
