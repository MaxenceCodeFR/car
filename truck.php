require_once 'Vehicle.php';
class Truck extends Vehicle
{

    public const ALLOWED_ENERGY = [
        'fuel',
        'electric',
    ];
    

    protected int $stockCapacity;
    protected int $load = 100;

    public function __construct(int $stockCapacity, string $color, int $nbSeats, string $energy)
    {
        $this->color;
        $this->nbSeats;
        $this->setEnergy($energy);
        $this->stockCapacity;
    }


    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGY)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }
    public function setStockCapacity(int $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }

    public function getLoad(): int
    {
        if ($this->load < 0) {
            $this->load = 0;
        }
        return $this->load;
    }

    public function setLoad(int $load): void
    {
        $this->load = $load;
    }
    public function full()
    {
        $sentence = "";
        while ($this->capacity > $this->filling) {
            $this->filling++;
        }
        echo $sentence .= "in filling . $this->filling . m3 <br>";
        $sentence = "full";
        return $sentence;
    }
}
