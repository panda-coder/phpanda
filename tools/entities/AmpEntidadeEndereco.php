<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpEntidadeEndereco
 *
 * @ORM\Table(name="amp_entidade_endereco", indexes={@ORM\Index(name="fk_amp_endereco_entidade_1", columns={"id_entidade"}), @ORM\Index(name="fk_amp_endereco_entidade_2", columns={"id_endereco"})})
 * @ORM\Entity
 */
class AmpEntidadeEndereco
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_entidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEntidade = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_endereco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEndereco = '0';


    /**
     * Set idEntidade
     *
     * @param int $idEntidade
     *
     * @return AmpEntidadeEndereco
     */
    public function setIdEntidade($idEntidade)
    {
        $this->idEntidade = $idEntidade;

        return $this;
    }

    /**
     * Get idEntidade
     *
     * @return int
     */
    public function getIdEntidade()
    {
        return $this->idEntidade;
    }

    /**
     * Set idEndereco
     *
     * @param int $idEndereco
     *
     * @return AmpEntidadeEndereco
     */
    public function setIdEndereco($idEndereco)
    {
        $this->idEndereco = $idEndereco;

        return $this;
    }

    /**
     * Get idEndereco
     *
     * @return int
     */
    public function getIdEndereco()
    {
        return $this->idEndereco;
    }
}

