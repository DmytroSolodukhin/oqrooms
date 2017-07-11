<?php

/**
 * @author:     dss <dss@nxc.no>
 *
 * @copyright   Copyright (C) 2015 NXC AS.
 * @date: 14 05 2015
 */
namespace WebBundle\Menu;

use CoreBundle\Entity\Product;
use Entity\Category;
use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * Class Builder.
 */
class Builder extends ContainerAware
{
    /**
     * @param FactoryInterface $factory
     * @param array            $options
     *
     * @return ItemInterface
     */
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', ['childrenAttributes' => ['class'=>'nav navbar-nav navbar-right'] ]);
        $user = $this->getUser();

        $menu->addChild('Главная',       ['route' => 'web_homepage']);
        $menu->addChild('Квесты',        ['route' => 'web_quests']);
        $pages = $this->container->get('page.handler')->getEntities();

        foreach ($pages as $page) {
            $menu->addChild($page->getTitle(), ['uri' => '/page/'.$page->getId()]);
        }

        if($user){
            $menu->addChild('profile', [
                'label' => 'Админка',
                'route' => 'sonata_user_profile_show'
            ]);
        }

        return $menu;
    }

    /**
     * @return bool
     */
    private function getUser()
    {
        $token = $this->container->get('security.token_storage')->getToken();

        if (!is_object($user = $token->getUser())) {
            // e.g. anonymous authentication
            return false;
        }

        return $user;
    }
}
