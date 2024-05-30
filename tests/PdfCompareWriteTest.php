<?php
/*
 * This file is part of the 'fpdf' package.
 *
 * For the license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author bibi.nu <bibi@bibi.nu>
 */

declare(strict_types=1);

namespace fpdf;

use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(FPDF::class)]
#[CoversClass(PdfDocument::class)]
class PdfCompareWriteTest extends AbstractCompareTestCase
{
    protected function updateNewDocument(PdfDocument $doc): void
    {
        $doc->write("This is a write test.\nWith multi-lines.");
    }

    protected function updateOldDocument(FPDF $doc): void
    {
        $doc->Write(5.0, "This is a write test.\nWith multi-lines.");
    }
}
