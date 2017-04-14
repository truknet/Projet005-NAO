<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taxrefv10
 *
 * @ORM\Table(name="taxrefv10")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Taxrefv10Repository")
 */
class Taxrefv10
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="regne", type="string", length=255)
     */
    private $Regne;

    /**
     * @var string
     *
     * @ORM\Column(name="phylum", type="string", length=255)
     */
    private $Phylum;

    /**
     * @var string
     *
     * @ORM\Column(name="classe", type="string", length=255)
     */
    private $Classe;

    /**
     * @var string
     *
     * @ORM\Column(name="ordre", type="string", length=255)
     */
    private $Ordre;

    /**
     * @var string
     *
     * @ORM\Column(name="famille", type="string", length=255)
     */
    private $Famille;

    /**
     * @var string
     *
     * @ORM\Column(name="group1inpn", type="string", length=255)
     */
    private $Group1Inpn;

    /**
     * @var string
     *
     * @ORM\Column(name="group2inpn", type="string", length=255)
     */
    private $Group2Inpn;

    /**
     * @var int
     *
     * @ORM\Column(name="cd_nom", type="integer", nullable=true)
     */
    private $CdNom;

    /**
     * @var int
     *
     * @ORM\Column(name="cd_taxsup", type="integer", nullable=true)
     */
    private $CdTaxsup;

    /**
     * @var int
     *
     * @ORM\Column(name="cd_sup", type="integer", nullable=true)
     */
    private $CdSup;

    /**
     * @var int
     *
     * @ORM\Column(name="cd_ref", type="integer", nullable=true)
     */
    private $CdRef;

    /**
     * @var string
     *
     * @ORM\Column(name="rang", type="string", length=255)
     */
    private $Rang;

    /**
     * @var string
     *
     * @ORM\Column(name="lb_nom", type="string", length=255)
     */
    private $LbNom;

    /**
     * @var string
     *
     * @ORM\Column(name="lb_auteur", type="string", length=255)
     */
    private $LbAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_complet", type="string", length=255)
     */
    private $NomComplet;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_complet_html", type="string", length=255)
     */
    private $NomCompletHtml;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_valide", type="string", length=255)
     */
    private $NomValide;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_vern", type="string", length=255)
     */
    private $NomVern;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_vern_eng", type="string", length=255)
     */
    private $NomVernEng;

    /**
     * @var int
     *
     * @ORM\Column(name="habitat", type="integer", nullable=true)
     */
    private $Habitat;

    /**
     * @var string
     *
     * @ORM\Column(name="fr", type="string", length=255)
     */
    private $Fr;

    /**
     * @var string
     *
     * @ORM\Column(name="gf", type="string", length=255)
     */
    private $Gf;

    /**
     * @var string
     *
     * @ORM\Column(name="mar", type="string", length=255)
     */
    private $Mar;

    /**
     * @var string
     *
     * @ORM\Column(name="gua", type="string", length=255)
     */
    private $Gua;

    /**
     * @var string
     *
     * @ORM\Column(name="sm", type="string", length=255)
     */
    private $Sm;

    /**
     * @var string
     *
     * @ORM\Column(name="sb", type="string", length=255)
     */
    private $Sb;

    /**
     * @var string
     *
     * @ORM\Column(name="spm", type="string", length=255)
     */
    private $Spm;

    /**
     * @var string
     *
     * @ORM\Column(name="may", type="string", length=255)
     */
    private $May;

    /**
     * @var string
     *
     * @ORM\Column(name="epa", type="string", length=255)
     */
    private $Epa;

    /**
     * @var string
     *
     * @ORM\Column(name="reu", type="string", length=255)
     */
    private $Reu;

    /**
     * @var string
     *
     * @ORM\Column(name="sa", type="string", length=255)
     */
    private $Sa;

    /**
     * @var string
     *
     * @ORM\Column(name="ta", type="string", length=255)
     */
    private $Ta;

    /**
     * @var string
     *
     * @ORM\Column(name="taaf", type="string", length=255)
     */
    private $Taaf;

    /**
     * @var string
     *
     * @ORM\Column(name="pf", type="string", length=255)
     */
    private $Pf;

    /**
     * @var string
     *
     * @ORM\Column(name="nc", type="string", length=255)
     */
    private $Nc;

    /**
     * @var string
     *
     * @ORM\Column(name="wf", type="string", length=255)
     */
    private $Wf;

    /**
     * @var string
     *
     * @ORM\Column(name="cli", type="string", length=255)
     */
    private $Cli;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $Url;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set regne
     *
     * @param string $regne
     *
     * @return Taxrefv10
     */
    public function setRegne($regne)
    {
        $this->Regne = $regne;

        return $this;
    }

    /**
     * Get regne
     *
     * @return string
     */
    public function getRegne()
    {
        return $this->Regne;
    }

    /**
     * Set phylum
     *
     * @param string $phylum
     *
     * @return Taxrefv10
     */
    public function setPhylum($phylum)
    {
        $this->Phylum = $phylum;

        return $this;
    }

    /**
     * Get phylum
     *
     * @return string
     */
    public function getPhylum()
    {
        return $this->Phylum;
    }

    /**
     * Set classe
     *
     * @param string $classe
     *
     * @return Taxrefv10
     */
    public function setClasse($classe)
    {
        $this->Classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return string
     */
    public function getClasse()
    {
        return $this->Classe;
    }

    /**
     * Set ordre
     *
     * @param string $ordre
     *
     * @return Taxrefv10
     */
    public function setOrdre($ordre)
    {
        $this->Ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return string
     */
    public function getOrdre()
    {
        return $this->Ordre;
    }

    /**
     * Set famille
     *
     * @param string $famille
     *
     * @return Taxrefv10
     */
    public function setFamille($famille)
    {
        $this->Famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->Famille;
    }

    /**
     * Set group1Inpn
     *
     * @param string $group1Inpn
     *
     * @return Taxrefv10
     */
    public function setGroup1Inpn($group1Inpn)
    {
        $this->Group1Inpn = $group1Inpn;

        return $this;
    }

    /**
     * Get group1Inpn
     *
     * @return string
     */
    public function getGroup1Inpn()
    {
        return $this->Group1Inpn;
    }

    /**
     * Set group2Inpn
     *
     * @param string $group2Inpn
     *
     * @return Taxrefv10
     */
    public function setGroup2Inpn($group2Inpn)
    {
        $this->Group2Inpn = $group2Inpn;

        return $this;
    }

    /**
     * Get group2Inpn
     *
     * @return string
     */
    public function getGroup2Inpn()
    {
        return $this->Group2Inpn;
    }

    /**
     * Set cdNom
     *
     * @param integer $cdNom
     *
     * @return Taxrefv10
     */
    public function setCdNom($cdNom)
    {
        $this->CdNom = $cdNom;

        return $this;
    }

    /**
     * Get cdNom
     *
     * @return int
     */
    public function getCdNom()
    {
        return $this->CdNom;
    }

    /**
     * Set cdTaxsup
     *
     * @param integer $cdTaxsup
     *
     * @return Taxrefv10
     */
    public function setCdTaxsup($cdTaxsup)
    {
        $this->CdTaxsup = $cdTaxsup;

        return $this;
    }

    /**
     * Get cdTaxsup
     *
     * @return int
     */
    public function getCdTaxsup()
    {
        return $this->CdTaxsup;
    }

    /**
     * Set cdSup
     *
     * @param integer $cdSup
     *
     * @return Taxrefv10
     */
    public function setCdSup($cdSup)
    {
        $this->CdSup = $cdSup;

        return $this;
    }

    /**
     * Get cdSup
     *
     * @return int
     */
    public function getCdSup()
    {
        return $this->CdSup;
    }

    /**
     * Set cdRef
     *
     * @param integer $cdRef
     *
     * @return Taxrefv10
     */
    public function setCdRef($cdRef)
    {
        $this->CdRef = $cdRef;

        return $this;
    }

    /**
     * Get cdRef
     *
     * @return int
     */
    public function getCdRef()
    {
        return $this->CdRef;
    }

    /**
     * Set rang
     *
     * @param string $rang
     *
     * @return Taxrefv10
     */
    public function setRang($rang)
    {
        $this->Rang = $rang;

        return $this;
    }

    /**
     * Get rang
     *
     * @return string
     */
    public function getRang()
    {
        return $this->Rang;
    }

    /**
     * Set lbNom
     *
     * @param string $lbNom
     *
     * @return Taxrefv10
     */
    public function setLbNom($lbNom)
    {
        $this->LbNom = $lbNom;

        return $this;
    }

    /**
     * Get lbNom
     *
     * @return string
     */
    public function getLbNom()
    {
        return $this->LbNom;
    }

    /**
     * Set lbAuteur
     *
     * @param string $lbAuteur
     *
     * @return Taxrefv10
     */
    public function setLbAuteur($lbAuteur)
    {
        $this->LbAuteur = $lbAuteur;

        return $this;
    }

    /**
     * Get lbAuteur
     *
     * @return string
     */
    public function getLbAuteur()
    {
        return $this->LbAuteur;
    }

    /**
     * Set nomComplet
     *
     * @param string $nomComplet
     *
     * @return Taxrefv10
     */
    public function setNomComplet($nomComplet)
    {
        $this->NomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get nomComplet
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->NomComplet;
    }

    /**
     * Set nomCompletHtml
     *
     * @param string $nomCompletHtml
     *
     * @return Taxrefv10
     */
    public function setNomCompletHtml($nomCompletHtml)
    {
        $this->NomCompletHtml = $nomCompletHtml;

        return $this;
    }

    /**
     * Get nomCompletHtml
     *
     * @return string
     */
    public function getNomCompletHtml()
    {
        return $this->NomCompletHtml;
    }

    /**
     * Set nomValide
     *
     * @param string $nomValide
     *
     * @return Taxrefv10
     */
    public function setNomValide($nomValide)
    {
        $this->NomValide = $nomValide;

        return $this;
    }

    /**
     * Get nomValide
     *
     * @return string
     */
    public function getNomValide()
    {
        return $this->NomValide;
    }

    /**
     * Set nomVern
     *
     * @param string $nomVern
     *
     * @return Taxrefv10
     */
    public function setNomVern($nomVern)
    {
        $this->NomVern = $nomVern;

        return $this;
    }

    /**
     * Get nomVern
     *
     * @return string
     */
    public function getNomVern()
    {
        return $this->NomVern;
    }

    /**
     * Set nomVernEng
     *
     * @param string $nomVernEng
     *
     * @return Taxrefv10
     */
    public function setNomVernEng($nomVernEng)
    {
        $this->NomVernEng = $nomVernEng;

        return $this;
    }

    /**
     * Get nomVernEng
     *
     * @return string
     */
    public function getNomVernEng()
    {
        return $this->NomVernEng;
    }

    /**
     * Set habitat
     *
     * @param integer $habitat
     *
     * @return Taxrefv10
     */
    public function setHabitat($habitat)
    {
        $this->Habitat = $habitat;

        return $this;
    }

    /**
     * Get habitat
     *
     * @return int
     */
    public function getHabitat()
    {
        return $this->Habitat;
    }

    /**
     * Set fr
     *
     * @param string $fr
     *
     * @return Taxrefv10
     */
    public function setFr($fr)
    {
        $this->Fr = $fr;

        return $this;
    }

    /**
     * Get fr
     *
     * @return string
     */
    public function getFr()
    {
        return $this->Fr;
    }

    /**
     * Set gf
     *
     * @param string $gf
     *
     * @return Taxrefv10
     */
    public function setGf($gf)
    {
        $this->Gf = $gf;

        return $this;
    }

    /**
     * Get gf
     *
     * @return string
     */
    public function getGf()
    {
        return $this->Gf;
    }

    /**
     * Set mar
     *
     * @param string $mar
     *
     * @return Taxrefv10
     */
    public function setMar($mar)
    {
        $this->Mar = $mar;

        return $this;
    }

    /**
     * Get mar
     *
     * @return string
     */
    public function getMar()
    {
        return $this->Mar;
    }

    /**
     * Set gua
     *
     * @param string $gua
     *
     * @return Taxrefv10
     */
    public function setGua($gua)
    {
        $this->Gua = $gua;

        return $this;
    }

    /**
     * Get gua
     *
     * @return string
     */
    public function getGua()
    {
        return $this->Gua;
    }

    /**
     * Set sm
     *
     * @param string $sm
     *
     * @return Taxrefv10
     */
    public function setSm($sm)
    {
        $this->Sm = $sm;

        return $this;
    }

    /**
     * Get sm
     *
     * @return string
     */
    public function getSm()
    {
        return $this->Sm;
    }

    /**
     * Set sb
     *
     * @param string $sb
     *
     * @return Taxrefv10
     */
    public function setSb($sb)
    {
        $this->Sb = $sb;

        return $this;
    }

    /**
     * Get sb
     *
     * @return string
     */
    public function getSb()
    {
        return $this->Sb;
    }

    /**
     * Set spm
     *
     * @param string $spm
     *
     * @return Taxrefv10
     */
    public function setSpm($spm)
    {
        $this->Spm = $spm;

        return $this;
    }

    /**
     * Get spm
     *
     * @return string
     */
    public function getSpm()
    {
        return $this->Spm;
    }

    /**
     * Set may
     *
     * @param string $may
     *
     * @return Taxrefv10
     */
    public function setMay($may)
    {
        $this->May = $may;

        return $this;
    }

    /**
     * Get may
     *
     * @return string
     */
    public function getMay()
    {
        return $this->May;
    }

    /**
     * Set epa
     *
     * @param string $epa
     *
     * @return Taxrefv10
     */
    public function setEpa($epa)
    {
        $this->Epa = $epa;

        return $this;
    }

    /**
     * Get epa
     *
     * @return string
     */
    public function getEpa()
    {
        return $this->Epa;
    }

    /**
     * Set reu
     *
     * @param string $reu
     *
     * @return Taxrefv10
     */
    public function setReu($reu)
    {
        $this->Reu = $reu;

        return $this;
    }

    /**
     * Get reu
     *
     * @return string
     */
    public function getReu()
    {
        return $this->Reu;
    }

    /**
     * Set sa
     *
     * @param string $sa
     *
     * @return Taxrefv10
     */
    public function setSa($sa)
    {
        $this->Sa = $sa;

        return $this;
    }

    /**
     * Get sa
     *
     * @return string
     */
    public function getSa()
    {
        return $this->Sa;
    }

    /**
     * Set ta
     *
     * @param string $ta
     *
     * @return Taxrefv10
     */
    public function setTa($ta)
    {
        $this->Ta = $ta;

        return $this;
    }

    /**
     * Get ta
     *
     * @return string
     */
    public function getTa()
    {
        return $this->Ta;
    }

    /**
     * Set taaf
     *
     * @param string $taaf
     *
     * @return Taxrefv10
     */
    public function setTaaf($taaf)
    {
        $this->Taaf = $taaf;

        return $this;
    }

    /**
     * Get taaf
     *
     * @return string
     */
    public function getTaaf()
    {
        return $this->Taaf;
    }

    /**
     * Set pf
     *
     * @param string $pf
     *
     * @return Taxrefv10
     */
    public function setPf($pf)
    {
        $this->Pf = $pf;

        return $this;
    }

    /**
     * Get pf
     *
     * @return string
     */
    public function getPf()
    {
        return $this->Pf;
    }

    /**
     * Set nc
     *
     * @param string $nc
     *
     * @return Taxrefv10
     */
    public function setNc($nc)
    {
        $this->Nc = $nc;

        return $this;
    }

    /**
     * Get nc
     *
     * @return string
     */
    public function getNc()
    {
        return $this->Nc;
    }

    /**
     * Set wf
     *
     * @param string $wf
     *
     * @return Taxrefv10
     */
    public function setWf($wf)
    {
        $this->Wf = $wf;

        return $this;
    }

    /**
     * Get wf
     *
     * @return string
     */
    public function getWf()
    {
        return $this->Wf;
    }

    /**
     * Set cli
     *
     * @param string $cli
     *
     * @return Taxrefv10
     */
    public function setCli($cli)
    {
        $this->Cli = $cli;

        return $this;
    }

    /**
     * Get cli
     *
     * @return string
     */
    public function getCli()
    {
        return $this->Cli;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Taxrefv10
     */
    public function setUrl($url)
    {
        $this->Url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }
}
