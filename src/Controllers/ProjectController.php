<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controller;
use App\Dto\ProjectDto;
use App\Http\Request;
use App\Http\Response;

/**
 * Controller for handling requests to the projects page.
 *
 * Provides actions for rendering the projects page with a list of projects.
 */
class ProjectController extends Controller
{
    /**
     * Show the projects page.
     * Renders the 'projects' view with a list of projects.
     *
     * @param Request $request The current HTTP request instance.
     * @return Response
     */
    public function index(Request $request): Response
    {
        $response = new Response();
        $response->setTemplate($this->template, 'projects', [
            ...$this->pullFlash($response),
            'request' => $request,
            'projects' => $this->getProjects(),
        ]);
        return $response;
    }

    /**
     * Get list of projects to display.
     *
     * @return array<int, ProjectDto>
     */
    private function getProjects(): array
    {
        return [
            new ProjectDto(
                title: 'Mit semester projekt',
                description: 'Det her er mit semester eksamens projekt hvor jeg ville lave en hjemmeside som ville hjælpe mænd fra alderen 25-35 år med at komme mere ud socialicere ved hjælp af deres hoppies
                . dsv var det et projekt som lykkedes men hjalp mig godt på vej til at lære kodning bedre at kende',
                technologies: 'PHP, HTML5, CSS3, Responsive Design',
                image: 'images/projects/nyt.png',
                code: 'https://github.com/madh-zealand/2sem-codetrack-01-portfolio',
                link: 'https://sem1-eks.maf013.dk/',
            ),
            new ProjectDto(
                title: 'Min gæstebog',
                description: 'jeg fik lavet om på bagrunds farven og tilføjet Postnummer som også gemmer sig i databasen',
                technologies: 'PHP,',
                image: 'images/projects/guestbook.png',
                code: 'https://github.com/madh-zealand/tba',
                link: 'https://guestbook.maf013.dk/',
            ),
            new ProjectDto(
                title: 'Storyboard ',
                description: 'jeg fik tilføjet en knap hvor man kan lave 1 colunm',
                technologies: 'JavaScript, HTML, CSS',
                image: 'images/projects/webgame.jpg',
                code: 'https://github.com/madh-zealand/tba',
                link: 'https://storyboard.maf013.dk/',
            ),

            new ProjectDto(
                title: 'Web Browser Game',
                description: 'jeg fik ændret bagrund og handling',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/webgame.jpg',
                code: 'https://github.com/madh-zealand/tba',
                link: 'https://webspil.maf013.dk/',
            ),
            new ProjectDto(
                title: 'ui widget',
                description: 'jeg fik tiljevet 2 knapper som skifter farver',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/webgame.jpg',
                code: 'https://github.com/madh-zealand/tba',
                link: 'https://uiwidget.maf013.dk/',
            ),
            new ProjectDto(
                title: 'mini crm',
                description: 'jeg har ikke lavet noget på dette projekt',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/webgame.jpg',
                code: 'https://github.com/madh-zealand/tba',
                link: 'https://mini-crm.maf013.dk/login',
            ),
            new ProjectDto(
                title: 'Presentation site',
                description: 'jeg har gjordt at man kan bruge piltasterne til at navigere',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/Presen.png',
                code: 'hhttps://github.com/madh-zealand/tba',
                link: 'https://presentation.maf013.dk/',
            ),
            new ProjectDto(
                title: 'ab testing tool',
                description: 'jeg har ikke lavet noget på dette projekt',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/Ab.png',
                code: 'https://github.com/madh-zealand/tba',
                link: 'https://abtest.maf013.dk/',
            ),
            new ProjectDto(
                title: 'style switcher',
                description: 'jeg har fået lavet en ny style switcher knap som hedder Color som skifter farven på hele siden',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/webspil.png',
                code: 'https://github.com/madh-zealand/tba',
                link: 'https://styleswitcher.maf013.dk/',
            ),





        ];
    }
}
