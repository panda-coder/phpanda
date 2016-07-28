<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNumeroNotaSequence
 *
 * @ORM\Table(name="amp_numero_nota_sequence")
 * @ORM\Entity
 */
class AmpNumeroNotaSequence
{
    /**
     * @var int
     *
     * @ORM\Column(name="sequence", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sequence;


    /**
     * Get sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }
}

