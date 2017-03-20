<?php
namespace ImmediateSolutions\Themes\Support;
use ImmediateSolutions\Core\Entities\Form;
use ImmediateSolutions\Core\Entities\Theme;
use ImmediateSolutions\Core\Interfaces\ArchiverInterface;
use ImmediateSolutions\Core\Interfaces\ContainerInterface;
use ImmediateSolutions\Themes\Support\Interfaces\PreferenceInterface;
use ImmediateSolutions\Core\Interfaces\ArchitectInterface;
use ImmediateSolutions\Core\Objects\Archive;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
abstract class AbstractArchitect implements ArchitectInterface
{
	/**
	 * @var ArchiverInterface
	 */
	private $archiver;

	/**
	 * @var PreferenceInterface $preference
	 */
	private $preference;

	/**
	 * @var Theme $theme
	 */
	private $theme;

	/**
	 * @param ContainerInterface $container
	 */
	public function __construct(ContainerInterface $container)
	{
		$this->archiver = $container->get(ArchiverInterface::class);
		$this->preference = $container->get(PreferenceInterface::class);
	}

	/**
	 * @param Form $form
	 * @return Archive
	 */
	public function build(Form $form)
	{
		ob_start();

		$this->draw($form);

		$content = ob_get_clean();

		$buildPath = $this->preference->getBuildPath();
		$themePath = $buildPath.PATH_SEPARATOR.$form->getTheme()->getName();

		file_put_contents($themePath.PATH_SEPARATOR.'index.php', $content);

		$assets = $this->assets();

		foreach ($assets as $folder => $files){

			$folderPath = $themePath.PATH_SEPARATOR.$folder;

			mkdir($folderPath, 0777, true);

			foreach ($files as $file){
				copy($file, $folderPath.PATH_SEPARATOR.basename($file));
			}
		}

		return $this->archiver->compress($buildPath);
	}
	/**
	 * @param Form $form
	 */
	protected abstract function draw(Form $form);

	/**
	 * @return array
	 */
	protected abstract function assets();
}