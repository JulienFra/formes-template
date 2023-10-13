<?php

namespace Opmvpc\Formes\Renderers;

class JPGRenderer extends SVGRenderer implements Renderer
{
    public function save(string $path): void {
        $rasterImage = $this->getSVG()->toRasterImage($this->canvas->getWidth(), $this->canvas->getHeight(), '#FFFFFF');
        imagejpeg($rasterImage, $path);
    }
}
